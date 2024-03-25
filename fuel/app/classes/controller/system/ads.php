<?php

class Controller_System_Ads extends Controller
{
    public function before()
    {
        parent::before();

        Lang::load('system');
    }

    public function action_create()
    {
        
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/ads/create', $data));
    }

    public function action_save()
    {
        // フォームのデータを処理するコードをここに記述

        // 保存が完了したら、リダイレクト
        Response::redirect('http://localhost/testasp.com/system');
    }

    public function action_edit()
    {
        
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/ads/edit', $data));
    }

}
