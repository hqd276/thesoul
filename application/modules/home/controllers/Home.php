<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data );
	}
	
	public function index(){
		$dataR = Modules::run('right');
		$this->template->set_partial('right','right',$dataR);

		$data = array();

		$this->load->model(array('admin/modelbanner','admin/modelproduct','admin/modelcategory','admin/modelgallery','admin/modelsetting'));

		$about = $this->modelsetting->getSettingByKey('about');
		$about['data'] = json_decode($about['value']);
		$data['about'] = $about;

		$categories = $this->modelcategory->getCategories(array('status'=>1,'type'=>2));
		$data['categories'] = $categories;

		$banners = $this->modelbanner->getBanner(array('position'=>0));
		$data['banners'] = $banners;

		$gallery = $this->modelgallery->getGallery(array('status'=>1));
		
		$data['gallery'] = $gallery;

		$data['show_slide'] = true;

		$data['page'] = 'home';

		$this->template->build('home',$data);
	}
}
