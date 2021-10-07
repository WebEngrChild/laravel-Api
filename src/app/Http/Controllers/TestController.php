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

    public static function huga()
    {

    //■デバッグ対応■
        //①dump()：処理を停止させずに中身を表示。型は表示されない。
        $array = array(1,2,3,"いち","に","さん");
        dump($array);

        //②ver_dump()：処理を停止させずに中身を表示。型も表示される。
        $array = array(4,5,6,'いち','に','さん');
        var_dump($array);

        //③dd():処理が停止。型は表示されない。
        $array = array(7,8,9,'なな','はち','きゅう');
        dd($array);

        return '関数の処理結果を返しているよ';
    }
}

//■■Tinkerを利用する場合に注意が必要な点■■
    //①Tinkerはリアルタイムにエディターの内容を反映しない
    //②エディターの内容を反映したら一度Tinkerを終了して再起動が必要

    // ■起動方法
    // php artisan tinker

    // ■メソッド確認方法
    // ①>>>
    // App\Http\Controllers\TestController::hoge();

    // ②>>>
    // $controller = app()->make('App\Http\Controllers\TestController');
    // app()->call([$controller, ‘hoge’]);
    // app()->call('App\Http\Controllers\TestController@hoge’);

    // ■モデルを使用する方法
    // >>> use App\User
    // >>> $user = User::find(1)


