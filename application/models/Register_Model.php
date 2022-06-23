<?php
 class Register_model extends CI_Model{
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	}


 	function checkLogin($data){
 		$this->db->where("username",$data['username']);
 		$this->db->or_where("email",$data['username']);
         
 		$query=$this->db->get("user");
 		if($query->num_rows()>0){
 			$this->db->where("username",$data['username']);
 			$this->db->or_where("email",$data['username']);
 			$this->db->where("password",$data['password']);

 		     $query=$this->db->get("user");

 		     if($query->num_rows()>0){
 		     	return array("message"=>"success","status"=>true);
 		     }
 		     else{
 		     	return array("message"=>"Password is wrong","status"=>false);
 		     }
 		}
 		else{
 			return array("message"=>"Username or Email not found","status"=>false);
 		}
 	}


 	function register($data){
 		$this->db->where("email",$data['email']);
 		$query=$this->db->get("user");
 		if($query->num_rows()>0){
 			return array("message"=>"Email is already exist","status"=>false);
 		}
 		else{
 			$this->db->where("username",$data['username']);
 		$query=$this->db->get("user");
 		if($query->num_rows()>0){
 			return array("message"=>"Username is already exist","status"=>false);
 		}
 		else{
 			$check=$this->db->insert("user",$data);
 			if($check){
 				return array("message"=>"success","status"=>true);
 			}
 			else{
 			return array("message"=>"Whoops! something is wrong","status"=>false);	
 			}
 		}

 		}
 	}

 	function Details($username){
 		$this->db->where("username",$username);
 		$this->db->or_where("email",$username);
 		$query=$this->db->get("user");
 		return $query->result_array();
 	}


 	function update($data){
 		$this->db->where("id",$data['id']);
 		$check=$this->db->update("user",$data);
 		if($check){
 			return true;
 		}
 		else{
 			return false;
 		}

 	}
 }

?>