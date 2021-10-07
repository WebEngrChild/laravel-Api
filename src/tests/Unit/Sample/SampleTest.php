<?php

namespace Tests\Unit\Sample;

// use PHPUnit\Framework\TestCase; //これだとヘルパー関数が使用できない↓↓にする！
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use App\Http\Controllers\TestController; //TestControllerの呼び出し
use App\Http\Controllers\DebugController; //DebugControllerの呼び出し

class SampleTest extends TestCase
{
    //■■テスト１：TestController
    // public function test_add()
    // {
    //     $test = new TestController;
    //     $sum = $test->add(5, 3);
    //     $this->assertEquals(8, $sum);
    // }

    /**
     * @test
     */
    // public function 引き算()
    // {
    //     $test = new TestController;
    //     $sum = $test->sub(5, 3);
    //     $this->assertEquals(2, $sum);
    // }

    //■■テスト２：DebugControllerの返却値='処理結果'を確認する
    public function test_statusCode()
    {
        $debug = new DebugController;
        $response = $debug->hoge();
        $this->assertSame('処理結果', $response);
    }

}
