<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelproject');

		$data = Modules::run('header','home');
		$data['page'] = 'project';
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($cat = 0){
		$data = array();
		$data['page'] = "project";

		$where = array('status'=>1);
		if ($cat)
			$where['category_id'] = $cat;
 		$list_items = $this->modelproject->getProject($where);
 
 		$data['list_items'] = $list_items;
		$this->template->build('project',$data);
	}
	public function index_t($slug = ''){
		$data = array();
		$data['page'] = "project";

		$where = array('status'=>1);

		$category = $this->modelcategory->getCategoryBy('slug',$slug);
		if ($category){
			$where['category_id'] = $category['id'];
		}

		$list_items = $this->modelproject->getProject($where);

 		$data['category'] = $category;
 		$data['list_items'] = $list_items;
		$this->template->build('project',$data);
	}
}