<?php

class Controller_Media extends Controller
{
    public function before()
    {
        parent::before();

        Lang::load('media');
    }

    public function action_index() {
        // idが1のデータを取得
        $data['account'] = Model_Account::find(1);
        return View::forge('media/index', $data);
    }

    public function action_create() {
        // テーブルに表示するデータを取得する例
        // $data['items'] = Model_Item::find('all');
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/media/create', $data));
    }


}
