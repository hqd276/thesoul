<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model(array('admin/modelcategory','admin/modelnews','admin/modelvideo'));
		$data = array();
		
		$cat_news = array();
		$cat_product = array();
		$cat_project = array();
		$cat_service = array();
		$categories = $this->modelcategory->getCategories(array('status'=>1),null," ORDER BY `order`");
		
		foreach ($categories as $key => $value) {
			if ($value['type']==1){
				$cat_product[] = $value;
			}else if ($value['type']==0){
				$cat_news[] = $value;
			}else if ($value['type']==2){
				$cat_project[] = $value;
			}else if ($value['type']==3){
				$cat_service[] = $value;
			}
		}
		$data['cat_news'] = $cat_news;
		$data['cat_product'] = $cat_product;
		$data['cat_project'] = $cat_project;
		$data['cat_service'] = $cat_service;

		$list_service = $this->modelcategory->getCategories(array('status'=>1,'type'=>3),null," ORDER BY `order`");
		foreach ($list_service as $key => $value) {
			$list_service[$key]['items'] = $this->modelnews->getNews(array('category_id'=>$value['id']));
		}
		$data['list_service'] = $list_service;

		$data['page'] = $page;

		$this->load->model(array('admin/modelsetting'));

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;
		$data['show_slide'] = false;
		
		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}
