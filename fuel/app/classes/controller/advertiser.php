<?php

class Controller_Advertiser extends Controller {

    public function action_index()
    {
        // idが1のデータを取得
        $data['account'] = Model_Account::find(1);
        return View::forge('advertiser/index', $data);
    }

    public function action_regist()
    {
        // テーブルに表示するデータを取得する例
        // $data['items'] = Model_Item::find('all');
        return Response::forge(View::forge('advertiser/regist'));
    }

}
