<?php

class Controller_Advertiser_Report extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$this->template->title = 'Advertiser/report &raquo; Index';
		$this->template->content = View::forge('advertiser/report/index', $data);
	}

}
