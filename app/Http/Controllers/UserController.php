<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
//        $users = \App\User::where('id',31)
//                        ->select('name','id')
//                        ->get();
        $users = User::all();

        return $users;
    }

    public function show($id, Request $request){
//        $user = User::findOrFail($id);

        $headers = $request->header('user-agent');
        dd($headers);

        return response('Hello world!',200)
//            ->header('ContentType', 'Application/json')
            ;
    }
}
