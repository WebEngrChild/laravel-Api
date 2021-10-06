<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function getprojects()
    {
        $user = new User();
      //■■NGシリーズ■■
        // $res = $user->projects()->where("user_id", 1)->get(); ←Nullになる
        // $res = $user->projects->get(); ←Nullになる
        // $res = $user->projects->find(1); ←Nullになる
        // $res = $user->get()->projects; ←Nullになる

      //■■OKシリーズ■■
        // $res = $user->with('projects')->get(); ←OK！
        // $res = $user->all(); ←OK！
        // $res = $user->find(1)->projects; ←OK！

        $res = $user->find(1)->career;

        dd($res);
    }
}
