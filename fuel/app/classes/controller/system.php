<?php

class Controller_System extends Controller
{

    public function before()
    {
        parent::before();

        Lang::load('system');
    }

    public function action_index() {
        // idが1のデータを取得
        $data['account'] = Model_Account::find(1);
        return View::forge('system/index', $data);
    }

    public function action_regist() {
        // テーブルに表示するデータを取得する例
        // $data['items'] = Model_Item::find('all');
        return Response::forge(View::forge('system/regist'));
    }
}
