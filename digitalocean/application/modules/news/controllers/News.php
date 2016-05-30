<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelnews');
		$this->load->model('admin/modelcategory');

		$data = Modules::run('header','home');

		$data['page'] = 'service';
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($type = 0,$page=1){
		$data = array('slug'=>'');
		$data['title'] = "News";
		$data['page'] = "news";

		if($page<1)
			$page=1;
		$item_per_page = 5;
		$begin = ($page-1) * $item_per_page;

		if (!empty($cat)){
			$category = $this->modelcategory->getCategoryById($cat);
			$data['cat'] = $category;
			$list_news = $this->modelnews->getNews(array('category_id'=>$cat),' LIMIT '.$begin.','.($item_per_page+1));
		}else{
			$data['cat'] = array('type'=>$type,'id'=>0,'name'=>'');
			$list_news = $this->modelnews->getNews(array('type'=>$type),' LIMIT '.$begin.','.($item_per_page+1));
		}
		$newer_link = '';
		if(count($list_news)>$item_per_page){
			$newer_link = base_url().'tin-tuc/'.($page+1);
			unset($list_news[$item_per_page]);
		}
		$older_link = '';
		if ($page>1) {
			$older_link = base_url().'tin-tuc/'.($page-1);
		}
		$data['newer_link'] = $newer_link;
		$data['older_link'] = $older_link;

		$data['list_news'] = $list_news;
		$this->template->build('news',$data);
	}
	public function index_t($type = 0,$slug = '',$page){
		$dataR = Modules::run('left',0);
		$this->template->set_partial('left','left',$dataR);

		$data = array('slug'=>'');

		$category = $this->modelcategory->getCategoryBy('slug',$slug);
		if ($category){
			$data['cat'] = $category;
			$data['title'] = $category['name'];
			$data['slug'] = $category['slug'];
			$data['description'] = $category['description'];
			$list_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
			if($list_news){
				foreach ($list_news as $key => $value) {
					if(!$value['image'])
						$list_news[$key]['image'] = '';
				}
			}
		}
		$newer_link = '';
		if(count($news)>$item_per_page){
			$newer_link = base_url().'tin-tuc/'.($page+1);
			unset($news[$item_per_page]);
		}
		$older_link = '';
		if ($page>1) {
			$older_link = base_url().'tin-tuc/'.($page-1);
		}
		$data['newer_link'] = $newer_link;
		$data['older_link'] = $older_link;

		$data['list_news'] = $list_news;
		$this->template->build('news',$data);
	}
	public function detail($id=0) {
		$dataR = Modules::run('left',0);
		$this->template->set_partial('left','left',$dataR);
		
		if ($id<=0) 
			redirect(base_url().'news');

		$detail_news = $this->modelnews->getNewsById($id);
		if (!$detail_news)
			redirect(base_url().'news');

		$other_news = array();
		if($detail_news['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_news['category_id']);
			if ($category)
				$other_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"");
		}else{
			$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"");
			$other_news = $this->modelnews->getNews(array('type'=>$detail_news['type']),' LIMIT 0,5');
		}
		

		$dataR = Modules::run('right',$detail_news['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['other_news'] = $other_news;
		$data['item'] = $detail_news;
		$data['cat'] = $category;
		$this->template->build('news-detail',$data);
	}

	public function detail_t($slug='') {
		$dataR = Modules::run('left',0);
		$this->template->set_partial('left','left',$dataR);

		if ($slug == '') 
			redirect(base_url().'news');

		$detail_news = $this->modelnews->getNewsBy($slug,'slug');
		if (!$detail_news)
			redirect(base_url().'news');

		$other_news = array();
		$category = array();
		
		if($detail_news['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_news['category_id']);
			if ($category)
				$other_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
			else
				$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"","slug"=>"");
		}else{
			$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"","slug"=>"");
			$other_news = $this->modelnews->getNews(array('type'=>$detail_news['type']),' LIMIT 0,5');
		}
		
		$this->modelnews->updateNewsBy('slug',$slug,array('views'=>$detail_news['views']+1));

		// $dataR = Modules::run('right',$detail_news['type']);
		// $this->template->set_partial('right','right',$dataR);

		$data['category'] = $category;
		$data['title'] = $detail_news['title'] ;
		$data['other_news'] = $other_news;
		$data['item'] = $detail_news;
		$data['cat'] = $category;
		$this->template->build('news-detail',$data);
	}
}