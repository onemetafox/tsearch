<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/PublicController.php');

class Talents extends PublicController {
	

	public function __construct(){
		parent::__construct();
	}
		/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function edit(){
		$user = $this->user_data();
		if(!$user){
			redirect("/");
		}
		$data["user"] = $user;
		$data["talent"] = $this->talent->getOneByParam(array("user_id"=>$user["id"]));
		$this->load->view("public/edit",$data);
	}
	public function save(){
		$data = $this->input->post();
		$user = $this->user_data();
		$data["user_id"] = $user["id"];
		unset($data["profile_avatar_remove"]);
		$context["json"] = json_encode($data);
		$temp = "";
		foreach($data as $key => $item){
			 $temp = $temp . " " . $item;
		}
		$context["content"] = $temp;

		if($data["id"]){
			$data["created_at"] = date("Y-m-d");
			$this->talent->updateData($data);
			$id = $data["id"];
			$context["id"] = $id;
			$this->context->updateData($context);

		}else {
			$id = $this->talent->setData($data);
			$this->context->setData($context);
		}
		if(isset($_FILES["file"])){
			if ( 0 < $_FILES['file']['error'] ) {
				echo 'Error: ' . $_FILES['file']['error'] . '<br>';
			}
			else {
				$name = $_FILES["file"]["name"];
				$ext = pathinfo($name, PATHINFO_EXTENSION);
				// print_r($_FILES["file".$i]['tmp_name']);
				move_uploaded_file($_FILES["file"]['tmp_name'], 'uploads/' . $id . "." . $ext);
			}
			$this->talent->updateData(array("id"=>$id, "image"=>$id . "." . $ext));
			$data["image"] = $id . "." . $ext;
		}
		$this->json(array("success"=>true, "msg"=>"成 功!", "id"=>$id));
	}
	////////////////////  //////////////////////////////////////////////////////
	public function search(){
		$filter = $this->input->post();
		if(!isset($filter["pagination"])){
			
			$pagination["page"] = 1;
		}else{
			$pagination = $filter["pagination"];
		}
		$pagination["perpage"] = 10;
		// print_r($filter);
		$limit["start"] = ($pagination["page"]-1) * $pagination["perpage"];
		$limit["end"] = $pagination["perpage"];

		if(isset($filter["active"])){
			$filter["query"]["active"] = $filter["active"];
			$data["active"] = $filter["active"];
		
		}
		if(isset($filter["belonging"])){
			$filter["query"]["belonging"] = $filter["belonging"];
			$data["belonging"] = $filter["belonging"];
		
		}
		if(isset($filter["talent"])){
			$filter["query"]["talent"] = $filter["talent"];
			$data["talent"] = $filter["talent"];
		}
		$data["talents"] = $this->talent->search($filter["query"],$limit);
		if(!isset($filter["query"])){
			$pagination["total"] = $this->talent->count();
		}else{
			$pagination["total"] = $this->talent->count($filter["query"]);
		}
		if( $pagination["total"] % $pagination["perpage"] == 0 ){
			$pagination["total_page"] = (int)($pagination["total"]/$pagination["perpage"]);
		}else{
			$pagination["total_page"] = (int)($pagination["total"]/$pagination["perpage"] +1);
		}
		$pagination["pages"] = ceil($pagination["total"]/$pagination["perpage"]);
		if(($pagination["page"] % 5) == 0 ){
			$pagination["start_page"] = ((int)$pagination["page"]/5-1) * 5 +1;
		}else{
			$pagination["start_page"] = ((int)($pagination["page"]/5)) * 5 +1;
			// $pagination["start_page"] = ($pagination["page"]/5 + 1) * 5;
		}
		$pagination["end_page"]	= $pagination["start_page"] + 5;
		$data["query"] = $filter["query"];
		$data["pagination"] = $pagination;
		$config["base_url"] = base_url() . "public/search";
		$config["total_row"] = $pagination["total"];
		$config["per_page"] = $pagination["perpage"];
		$data["user"] = $this->user_data();
		$this->load->view("public/search", $data);
	}
	public function view($id) {
		$data["user"] = $this->user_data();
		$data["talent"] = $this->talent->getDataById($id);
		$this->load->view("public/view", $data);
	}
}
