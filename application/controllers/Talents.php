<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/PublicController.php');

class Welcome extends Public {
	
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
	public function index()
	{
		$user = $this->user_data();
		$data["user"] = $user;
		$this->load->view("public/index", $data);
		
	}	
	public edit(){
		$user = $this->user_data();
		if(!$user)
			redirect("/");
		$this->load->view("")
	}
	public function signin(){
		$data = $this->input->post();
		$user = $this->admin->getOneByParam(array("user_id"=> $data["id"]));
		if($user){
			if($user["password"] == sha1($data["password"])){
				$user["last_activity"] = date("y-m-d h:s:i");
				$user["logged_status"] = 2;
				$this->session->set_userdata("user",$user);
				$this->admin->updateData($user);
				$this->json(array("success" => true, "msg" => "成功ログイン", "user" => $user));
			}else{
				$this->json(array("success" => false, "msg"=>"Password 間違った"));
			}	
		}else{
			$this->json(array("success" => false, "msg"=>"User ID 間違った"));
		}
		
	}

	public function signout(){
		$user = $this->session->userdata("user");
		$user["logged_status"] = "1";
		$this->admin->updateData($user);
	 	$this->session->unset_userdata('user');
		redirect("/");
	}
}
