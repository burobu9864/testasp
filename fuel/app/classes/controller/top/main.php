<?php

class Controller_Top_Main extends Controller
{
    public function action_index()
    {
        // 何かしらのデータをビューに渡す場合
        $data = array(
            'name' => 'John Doe',
            'age' => 25,
        );

        // ビューを読み込み、データを渡す
        $view = View::forge('top/index', $data);

        // レスポンスとしてビューを返す
        return $view;
    }
}
