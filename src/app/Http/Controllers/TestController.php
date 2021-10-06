<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public static function hoge()
    {
        $user = new User();
        $res = $user->find(1)->departments;
        return $res;
    }
}

//■■Tinkerを利用する場合に注意が必要な点■■
//①Tinkerはリアルタイムにエディターの内容を反映しない
//②エディターの内容を反映したら一度Tinkerを終了して再起動が必要


