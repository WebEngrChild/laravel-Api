<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Log; //④Logファサードを使用する
// use Log; //④Logファサードを使用する

class DebugController extends Controller
{
    public static function hoge()
    {

    //■デバッグ対応■
        //①dump()：処理を停止させずに中身を表示。型は表示されない。
        $array_dump = array(1,2,3,"いち","に","さん");
        dump($array_dump);

        // ②ver_dump()：処理を停止させずに中身を表示。型も表示される。
        $array_var_dump = array(4,5,6,'いち','に','さん');
        var_dump($array_var_dump);

        // ③dd():処理が停止。型は表示されない。
        $array_dd = array(7,8,9,'なな','はち','きゅう');

            //④Logファサードを使用する
            $r = $array_dd[3];
            Log::debug('$array_dd="'.$r.'"');

        // dd($array_dd);

        return '処理結果';
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

