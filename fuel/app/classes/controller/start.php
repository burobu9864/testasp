<?php
class Controller_Start extends Controller
{
    function action_index()
    {
        Response::redirect('client');
    }
    // public function action_404()
    // {
    //     return Response::forge(View::forge('start/404'), 404);
    // }
}
