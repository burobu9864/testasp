<?php

class Controller_Media extends Controller
{

    public function action_index() {
        return View::forge('media/index');
    }

}
