<?php

class Controller_Advertiser_Cert_Result extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Advertiser/cert result &raquo; Index';
		$this->template->content = View::forge('advertiser/cert/result/index', $data);
	}

}
