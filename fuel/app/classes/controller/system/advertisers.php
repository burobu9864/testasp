<?php

class Controller_System_Advertisers extends Controller
{
    public function action_create()
    {
        
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/advertisers/create', $data));
    }

    public function action_edit()
    {
        
        $data['account'] = Model_Account::find(1);
        return Response::forge(View::forge('system/advertisers/edit', $data));
    }

}
