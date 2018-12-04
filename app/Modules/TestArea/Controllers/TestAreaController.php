<?php

namespace App\Modules\TestArea\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class TestAreaController extends Controller
{
    // protected $connection="mysql2";

    public function testMysqlConn(){

        // $conn="mysql2";
        // $raw_query="SELECT*FROM USERS where id = 2";
        $user = User::all(); $data=$user;

        // $data = DB::connection($conn)->select($user);
        // $data = DB::connection($conn)->select($raw_query);
        return $data;
    }

    public function testPostgreConn(){
        $conn="pgsql";
        $raw_query="SELECT*FROM USERS where id = 2";
        // $user = User::all();

        // $data = DB::connection($conn)->select($user);
        $data = DB::connection($conn)->select($raw_query);
        return $data;
    }

    public function tes3(){
        $conn="pgsql";
        $user=User::all();

        $data=$user;

        return $data;

        // return "test3 untuk api yang masih percobaan dengan kekuatan bulan yang membuat mata melolong menjadi wolverine";
    }

    public function test(Request $request){
        return "sistem menampilkan pesan error untuk tiap component";
    }
    public function test1(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test2(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test3(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test4(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test5(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test6(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test7(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test8(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test9(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test10(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
    public function test11(Request $request){
        return "sistem menampilkan pesan eror yang dari rts untuk masing masing";
    }
}
