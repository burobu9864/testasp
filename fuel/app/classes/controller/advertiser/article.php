<?php

class Controller_Advertiser_Article extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$this->template->title = 'Advertiser/article &raquo; Index';
		$this->template->content = View::forge('advertiser/article/index', $data);
	}

}
