<?php

namespace App\Modules\Clients\Controllers;

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

class ClientController extends Controller
{

    public function list(){
        return "list";
    }

    public function detail(){
        return "detail";
    }

    public function create(){
        return "create";
    }

    public function update(){
        return "update";
    }

    public function delete(){
        return "delete";
    }

    public function test(){
        return "test";
    }

}
