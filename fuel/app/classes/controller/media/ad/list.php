<?php

class Controller_Media_Ad_List extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index' => 'active');
		$this->template->title = 'Media/ad/list &raquo; Index';
		$this->template->content = View::forge('media/ad/list/index', $data);
	}

}
