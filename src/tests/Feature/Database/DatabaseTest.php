<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema; //追加
use App\Department; //追加
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    //■■テスト１■■
    //LaravelのDBに依存しない操作モデルであるSchemaを用いてカラムチェック
    // public function testHasColumns()
    // {
    //     $this->assertTrue(
    //         Schema::hasColumns('departments', [
    //             'id', 'created_at', 'updated_at','name'
    //         ]),
    //         1
    //     );
    // }

    //■■テスト２■■
    //設定したテーブルにデータが挿入できるか確認
    // public function testInsertData()
    // {
    //     $department = new Department();
    //     $department->created_at = date("Y/m/d H:i:s");
    //     $department->updated_at = date("Y/m/d H:i:s");
    //     $department->name = 'department_name_test_1';
    //     $saveDepartment = $department->save();

    //     $this->assertTrue($saveDepartment);
    // }

    //■■テスト３■■
    //レコード内容のチェック
    // public function testCheckRecod()
    // {
    //     $department_name = [
    //         'name' => 'department_name_test_1',
    //     ];
    //     $this->assertDatabaseHas('departments', $department_name);
    // }

    //■■テスト４■■
    //テスト２＋３を同じ関数内で行う
    // use RefreshDatabase; //このトレイトでテスト利用後にデータを破棄してくれる

    // public function testCheckRecod()
    // {
    //     //DBの登録
        // $department = new Department();
        // $department->created_at = date("Y/m/d H:i:s");
        // $department->updated_at = date("Y/m/d H:i:s");
        // $department->name = 'department_name_test_1';
        // $saveDepartment = $department->save();

    //     //カラムの確認
    //     $department_name = [
    //         'name' => 'department_name_test_1',
    //     ];
    //     $this->assertDatabaseHas('departments', $department_name);
    // }

    //■■テスト５■■
    //Factory側では特に指定せずこちらで配列でカラム指定してデータ登録
    use RefreshDatabase;

    public function testDatabase()
    {
        $department = [
            'created_at' => date("Y/m/d H:i:s"),
            'updated_at' => date("Y/m/d H:i:s"),
            'name' => 'department_name_test_2',
        ];

        factory(Department::class)->create($department);

        $this->assertDatabaseHas('departments', $department);
    }

    //■■テスト６■■
    //Factory側（Fakerでカラム作成）を利用してデータ登録
    // use RefreshDatabase;

    // public function testDatabase()
    // {
    //     $departments = factory(Department::class, 3)->create();
    //     $bookCount = count($departments) == 3;
    //     $this->assertTrue($bookCount);
    // }

    // ■■サンプル用■■
    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
