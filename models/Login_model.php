<?php
	class Login_model extends CI_model{
		public function login($email,$pass){
			$query = $this->db->get_where('users.user',array('email'=>$email,'password'=>$pass));
			return $query->result();
		}
	}
?>