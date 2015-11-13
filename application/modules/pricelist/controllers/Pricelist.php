<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pricelist extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index(){
		$data = array();
		$data['page'] = 'pricelist';
		$this->load->model(array('admin/modelsetting'));
		$about = $this->modelsetting->getSettingByKey('banggia');
		$about['data'] = json_decode($about['value']);
		$data['about'] = $about;

		$this->template->build('pricelist',$data);
	}
	
}
