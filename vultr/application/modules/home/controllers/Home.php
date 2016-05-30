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

		$this->load->model(array('admin/modelbanner','admin/modelproduct','admin/modelcategory','admin/modelgallery','admin/modelsetting','admin/modelmember','admin/modelnews'));

		$about = $this->modelsetting->getSettingByKey('gioithieu');
		$about['data'] = json_decode($about['value']);
		$data['about'] = $about;

		// $categories = $this->modelcategory->getCategories(array('status'=>1,'type'=>2));
		// $data['categories'] = $categories;

		$product_home = $this->modelproduct->getProduct(array('home_product'=>1,'status'=>1),' LIMIT 0,8');
		$data['product_home'] = $product_home;

		$members = $this->modelmember->getMembers(array('status'=>1),' LIMIT 0,8');
		$data['partner'] = $members;

		$news_home = $this->modelnews->getNews(array('home_news'=>1,'status'=>1),' LIMIT 0,3',' id DESC');
		$data['news_home'] = $news_home;

		$banners = $this->modelbanner->getBanner(array('position'=>0));
		$data['banners'] = $banners;

		$gallery = $this->modelgallery->getGallery(array('status'=>1));
		
		$data['gallery'] = $gallery;

		$data['show_slide'] = true;

		$data['page'] = 'home';

		$this->template->build('home',$data);
	}
}
