<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends MX_Controller{
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelvideo'));

			$this->template->set('user',$user);
		}else{
			redirect(base_url('login'));
		}
		$this->template->set_layout('admin');
	}
	
	public function index($page = 1){
		$data = array();

		$item_per_page = 10;
		$begin = 0;
		if ($page>1) {
			$begin = ($page-1) * $item_per_page ;
		}
		$video = $this->modelvideo->getVideo(null,$begin.",".($item_per_page+1));

		if (count($video)>$item_per_page){
			$data['next'] = $page + 1;
			array_pop($video);
		}else 
			$data['next'] = 0;
		
		$data['prev'] = $page - 1;

		$data['list'] = $video;

		$this->template->build('listvideo',$data);
	}

	public function add(){
		$data = array();
		$data['title'] = "Add new video";

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util')); 

		$dataC = array('title' =>'',
						'link' =>'',
						'order' =>'',
						'status' =>'');
		
		if ($this->input->post('submit') == "ok") {
			$dataC['title'] = $this->input->post('title'); 
			$dataC['order'] = $this->input->post('order'); 
			$dataC['link'] = $this->input->post('link'); 

			if ($this->input->post('status'))
				$dataC['status'] = 1;
			else 
				$dataC['status'] = 0;
			$data['b_Check']= false;

			if ($this->modelvideo->insertVideo($dataC)){
				$data['b_Check']= true;
				// redirect(base_url('list-category/'.$type));
			}
		}
		$data['item'] = $dataC;
		$this->template->build('addvideo',$data);
	}
	public function edit($id=0){
		$data = array();
		$data['title'] = "Edit video";
		if ($id<=0)
			redirect(base_url('admin/video/index'));

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util')); 

		$dataC = $this->modelvideo->getVideoById($id);
		
		if ($this->input->post('submit') == "ok") {
			$dataC['title'] = $this->input->post('title'); 
			$dataC['order'] = $this->input->post('order'); 
			$dataC['link'] = $this->input->post('link'); 

			if ($this->input->post('status'))
				$dataC['status'] = 1;
			else 
				$dataC['status'] = 0;
			$data['b_Check']= false;

			if ($this->modelvideo->updateVideo($id,$dataC)){
				$data['b_Check']= true;
				// redirect(base_url('list-category/'.$type));
			}
		}
		$data['item'] = $dataC;
		$this->template->build('addvideo',$data);
	}

	public function delete($id=0){
		$this->db->delete('video', array('id' => $id)); 
		redirect(base_url('/admin/video'));
	}
}
