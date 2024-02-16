<?php

class Controller_Media_Report extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$this->template->title = 'Media/report &raquo; Index';
		$this->template->content = View::forge('media/report/index', $data);
	}

}
