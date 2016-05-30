<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelvideo');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($type = 0,$cat = 0){
		$data = array();
		$data['page'] = "video";
 		$list_items = $this->modelvideo->getVideo(array('status'=>1));
 
 		$data['list_items'] = $list_items;
		$this->template->build('video',$data);
	}
}