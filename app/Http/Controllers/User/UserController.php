<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getData(){


        $getPost = \DB::select('CALL get_posts');
       
         dd($getPost);

        return 'test User';
    }
}
