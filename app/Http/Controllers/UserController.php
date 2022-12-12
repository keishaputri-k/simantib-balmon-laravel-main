<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Manager\SubscriptionManager;
use App\Models\User;


class UserController extends Controller
{
    //function Read level
    public static function getLevel(){
        $user = User::value('level'); 
        // $user = DB::table('users')->select('level');
        // $level = $user->addSelect('admin')->get();
        return $user;
    }
}
?>