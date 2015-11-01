<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MX_Controller{
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelproject'));

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
		$this->load->model(array('modelcategory'));
		$project = $this->modelproject->getProject(null," LIMIT ".$begin.",".($item_per_page+1));
		if (count($project)>0) {
			foreach ($project as $key => $value) {
				if ($value['category_id']>0){
					$category = $this->modelcategory->getCategoryById($value['category_id']);
					$project[$key]['category'] = $category['name'];
				}else {
					$project[$key]['category'] = '';
				}
			}
		}

		if (count($project)>$item_per_page){
			$data['next'] = $page + 1;
			array_pop($project);
		}else 
			$data['next'] = 0;
		
		$data['prev'] = $page - 1;

		$data['list'] = $project;

		$this->template->build('listproject',$data);
	}

	public function add(){
		$data = array();
		$data['title'] = "Add new Image";

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util')); 

		$dataC = array(
						'category_id' =>'',
						'title' =>'',
						'image' =>'',
						'order' =>'',
						'status' =>'');
		
		if ($this->input->post('submit') == "ok") {
			$dataC['title'] = $this->input->post('title'); 
			$dataC['order'] = $this->input->post('order'); 
			$dataC['category_id'] = $this->input->post('category_id'); 

			if ($this->input->post('status'))
				$dataC['status'] = 1;
			else 
				$dataC['status'] = 0;
			$data['b_Check']= false;

			if (!empty ($_FILES['image'])) {
				$this->load->model(array('Mgallery'));
				$image_data = $this->Mgallery->do_upload("/project/");
				if ($image_data) {
					$dataC['image'] = $image_data["file_name"];
					if ($this->modelproject->insertImage($dataC)){
						$data['b_Check']= true;
						redirect(base_url('admin/project'));
					}
				}
			}
		}
		$this->load->model(array('modelcategory'));

		$category = $this->modelcategory->getCategories(array("type"=>2));

		$data['category_box'] = $this->category_box($category, $dataC);

		$data['item'] = $dataC;
		$this->template->build('addproject',$data);
	}
	public function edit($id=0){
		$data = array();
		$data['title'] = "Edit Image";
		if ($id<=0)
			redirect(base_url('admin/project/index'));

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util')); 

		$dataC = $this->modelproject->getImageById($id);
		
		if ($this->input->post('submit') == "ok") {
			$dataC['title'] = $this->input->post('title'); 
			$dataC['order'] = $this->input->post('order'); 
			$dataC['category_id'] = $this->input->post('category_id'); 

			if ($this->input->post('status'))
				$dataC['status'] = 1;
			else 
				$dataC['status'] = 0;
			$data['b_Check']= false;

			if (!empty ($_FILES['image'])) {
				$this->load->model(array('Mgallery'));
				$image_data = $this->Mgallery->do_upload("/project/");
				if ($image_data) {
					$dataC['image'] = $image_data["file_name"];
				}
			}

			if ($this->modelproject->updateImage($id,$dataC)){
				$data['b_Check']= true;
				redirect(base_url('admin/project'));
			}else{
				$data['b_Check']= false;
			}
		}
		$this->load->model(array('modelcategory'));

		$category = $this->modelcategory->getCategories(array("type"=>2));

		$data['category_box'] = $this->category_box($category, $dataC);

		$data['item'] = $dataC;
		$this->template->build('addproject',$data);
	}

	public function delete($id=0){
		$this->db->delete('project', array('id' => $id)); 
		redirect(base_url('/admin/project'));
	}

	function category_box ($category, $dataC) {
		$category_box = "";
		foreach ($category as $k => $v) {
			$category_box.= "<option value='".$v['id']."' ";
			$category_box.= ($dataC['category_id'] == $v['id'])?'selected':'';
			$category_box.= "> ".$v['name']."</option>";

		}
		// $category[$key]["child"]= $child;
		return $category_box;
	}
}
