<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Left extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index($type = 0){
		$this->load->model('admin/modelcategory');
		$this->load->model('admin/modelnews');

		$data = array();

		$list_service = $this->modelcategory->getCategories(array('status'=>1,'type'=>3),null," ORDER BY `order`");
		foreach ($list_service as $key => $value) {
			$list_service[$key]['items'] = $this->modelnews->getNews(array('category_id'=>$value['id']));
		}
		$data['list_service'] = $list_service;

		return $data;
	}
	
}
