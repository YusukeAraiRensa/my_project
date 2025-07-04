<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {

        $records = DB::connection('mysql')->select("select * from users");

        // $insertUsersRecord = DB::connection('mysql')->insert("insert into users (id, email, name, password) values (Null, 'a@a.com', '山田太郎', 'password'), (Null, 'b@b.com', '山田花子', 'password'), (Null, 'c@c.com', '磯野カツオ', 'password')");
        // 挿入された内容を確認（最新3件を取得してダンプ）
        // $users = DB::table('users')->orderBy('id', 'desc')->take(3)->get();
        // dd($users); // 確認用：追加されたユーザー情報が表示

        $deleteUserRecord = DB::connection('mysql')->delete("delete from users where name = '磯野カツオ'");
        dd($deleteUserRecord);

        return view("sample/index" , []);
    }
}