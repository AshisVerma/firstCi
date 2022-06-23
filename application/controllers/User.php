<?php
class User extends CI_Controller{
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
        $this->session->set_userdata("login",true);
        $this->session->set_userdata("username",$this->input->post("username"));
      	return redirect("/");
      }
      else{
        $this->session->set_flashdata("warning",$message['message']);
        return redirect("/");
      }
	}



  function register(){
    $data=array(
       "username"=>$this->input->post("username"),
       "email"=>$this->input->post("email"),
       "password"=>$this->input->post("password"),
    );
    $message=$this->Register_Model->register($data);
    if($message['status']==true){
      $this->session->set_flashdata("success","Registration Successfully");
      $this->session->set_userdata("login",true);
        return redirect("/");
    }
    else{
      $this->session->set_flashdata("warning",$message['message']);
        return redirect("/");
    }
  }


  public function dashboard(){
   $data=$this->Register_Model->Details($this->session->userdata("username"));

    $this->load->view("user/dashboard",['data'=>$data]);
  }



  public function logout(){
    $this->session->unset_userdata("login");
    $this->session->unset_userdata("username");
    return redirect("/");
  }


  public function profile_update(){
    if(isset($_FILES['image'])){
      $file=$_FILES['image'];
      $filename=$file['name'];
      $data=array(
      "id"=>$this->input->post("id"),
      "username"=>$this->input->post("username"),
      "email"=>$this->input->post("email"),
      "password"=>$this->input->post("password"),
      "image"=>$filename,
      "phone"=>$this->input->post("phone"),
      "address"=>$this->input->post("address"),
    );

      $update=$this->Register_Model->update($data);
      if($update){
        move_uploaded_file($file['tmp_name'], base_url("public/user/".$filename));
        $this->session->set_flashdata("message","<div class='alert alert-success'>Your Profile Updated Successfully<i class='fa fa-close close' data-dismiss='alert'></i></div>");
        return redirect(site_url("user/dashboard"));
      }
      else{
        $this->session->set_flashdata("message","<div class='alert alert-warning'>Whoops! something is wrong<i class='fa fa-close close' data-dismiss='alert'></i></div>");
        return redirect(site_url("user/dashboard"));
      }
    }
    else{
       $data=array(
      "id"=>$this->input->post("id"),
      "username"=>$this->input->post("username"),
      "email"=>$this->input->post("email"),
      "password"=>$this->input->post("password"),
      "phone"=>$this->input->post("phone"),
      "address"=>$this->input->post("address"),
    );

        $update=$this->Register_Model->update($data);
      if($update){
      
        $this->session->set_flashdata("message","<div class='alert alert-success'>Your Profile Updated Successfully<i class='fa fa-close close' data-dismiss='alert'></i></div>");
        return redirect(site_url("user/dashboard"));
      }
      else{
        $this->session->set_flashdata("message","<div class='alert alert-warning'>Whoops! something is wrong<i class='fa fa-close close' data-dismiss='alert'></i></div>");
        return redirect(site_url("user/dashboard"));
      }

    }
  }
}


?>