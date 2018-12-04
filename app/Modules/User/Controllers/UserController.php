<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Modules\User\Models\M_User;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\User;
use DB;
use Tymon\JWTAuth\Exceptions\JWTExceptions;

class UserController extends Controller
{

    public function register(RegisterFormRequest $request){// api untuk menambahkan user baru
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);

        $user->save();
        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

    public function login(Request $request){// api untuk login dengan user yang sudah ada
        $credentials = $request->only('email', 'password');

        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json(['error '=>'invalid_credentials'], 400);
            }
        }catch(JWTException $e){
            return response()->json(['error '=>'could_not_create_token'], 500);
        }
        $user = DB::table('users')
                    ->select('name', 'email')
                    ->where('email', '=', $request->get('email'))
                    ->get();

        $data = ([
            'author     '=>'R-nensia',
            'token type '=>'bearer',
            'account    '=>$user
            // 'expires_in :'=>$this->guard()->factory()->getTTL()*60
        ]);

        return response()->json(compact('data','token'));
    }

    public function user(Request $request){// api for showing the authenticated user
        // $users = DB::connection('pgsql2')->select('select * from users where id = ?', [1]);

        // return $users;
        $user = User::find(Auth::user()->id);
        return response([
            'status '=>'success',
            'data   '=>$user
        ], 200);
    }

    public function refresh(){// api for refreshing the token (not yet)
        return response([
            'status '=>'success'
        ]);
    }

    public function logout(){// api for logging out the authenticate  users
        JWTAuth::invalidate();
        return response([
            'status '=>'success',
            'msg    '=>'Logged out Successfully.'
        ], 200);
    }
}
