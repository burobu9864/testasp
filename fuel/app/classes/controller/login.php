<?php

class Controller_Login extends Controller {

    public function action_advertiser()
    {
        return View::forge('advertiser/login');
    }

    public function action_media()
    {
        return View::forge('media/login');
    }

    public function action_system()
    {
        return View::forge('system/login');
    }

}
