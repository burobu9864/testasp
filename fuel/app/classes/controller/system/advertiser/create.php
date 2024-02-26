<?php

class Controller_System_Advertiser_Create extends Controller
{
    public function action_index()
    {
        
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/advertisers/create', $data));
    }

    public function action_create() {
        // テーブルに表示するデータを取得する例
        // $data['items'] = Model_Item::find('all');
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/advertisers/create', $data));
    }
}
