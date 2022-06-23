<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Register_Model");
	}


	public function index(){
      $data=['email'=>$this->input->post("email"),"username"=>$this->input->post("username"),"password"=>$this->input->post("password")];

      $message=$this->Register_Model->checkLogin($data);
      if($message['status']==true){
      	$this->session->set_flashdata("success","Login Successfully");
        $this->session->set_userdata("email",$this->input->post("email"));
        $this->session->set_userdata("login",true);
      	return redirect("/");
      }
      else{
        $this->session->set_flashdata("warning",$message['message']);
        return redirect("/");
      }
	}
}


?>