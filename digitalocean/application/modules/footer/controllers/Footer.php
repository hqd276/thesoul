<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footer extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$data = array();


		$this->template->set_partial('footer','footer',$data);

		// $this->template->build('header',$data);
	}
	
}
