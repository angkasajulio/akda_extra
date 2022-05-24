<?php
	class Users_model extends CI_model{
		public function getAllUsers(){
                  $this->db->select('*');
                  $this->db->from('users.user');
                  $this->db->order_by('kode_posisi','asc');
                  $query = $this->db->get();
                  return $query->result();
		}

            public function getUsersByEmail($email){
                  $this->db->select('*');
                  $this->db->from('users.user');
                  $this->db->where('email = ',$email);
                  $this->db->order_by('kode_posisi','asc');
                  $query = $this->db->get();
                  return $query->result();
		}
            
            public function getAllPosisi(){
                  $this->db->select('*');
                  $this->db->from('users.posisi');
                  $this->db->order_by('kode_role','asc');
                  $query = $this->db->get();
                  return $query->result();
            }

            public function getPosisiById($id){
                  $this->db->select('*');
                  $this->db->from('users.posisi');
                  $this->db->where('id=',$id);
                  $query = $this->db->get();
                  return $query->result();
            }

            public function postPosisi($data,$table){
                  $this->db->insert($table,$data);
            }
            
            public function getAllRole(){
                  $this->db->select('*');
                  $this->db->from('users.role');
                  $this->db->order_by('id','asc');
                  $query = $this->db->get();
                  return $query->result();
            }

            public function getRoleById($id){
                  $this->db->select('*');
                  $this->db->from('users.role');
                  $this->db->where('id=',$id);
                  $query = $this->db->get();
                  return $query->result();
            }

            public function postRole($data,$table){
                  $this->db->insert($table,$data);
            }
	}
?>