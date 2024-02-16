<?php

class Controller_System extends Controller
{

    public function action_index()
    {
        return View::forge('system/index');
    }

}
