<?php
	class Penjualan_model extends CI_model{
		public function rekananTertanggung($page=null){
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->where("status = ","TERTANGGUNG");
			$this->db->limit(10,$offset);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}
		
		public function rekananMarketing($page=null){
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->where("status = ","MARKETING");
			$this->db->limit(10,$offset);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getAllTertanggung(){
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->where('status =','TERTANGGUNG');
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getAllMarketing(){
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->where('status =','MARKETING');
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getIdLastRekanan(){
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->limit(1);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNamaRekanan($nama){
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->like("nama",$nama);
			$query = $this->db->get();
			return $query->result();
		}

		public function insertRekanan($data)
		{
			$this->db->insert('transaction.rekanan',$data);
		}

		public function getAllPenjualan(){
			$this->db->select('*');
			$this->db->from('transaction.penjualan');
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPenjualan($page=null)
		{
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.penjualan');
			$this->db->limit(10,$offset);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getIdLastPenjualan(){
			$this->db->select('*');
			$this->db->from('transaction.penjualan');
			$this->db->limit(1);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}
		public function getNoregLastPenjualan(){
			$this->db->select('*');
			$this->db->from('transaction.penjualan');
			$this->db->limit(1);
			$this->db->order_by("noreg_akhir","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function searchRekananById($id){
			$this->db->select('*');
			$this->db->from('transaction.rekanan');
			$this->db->where("id = ",$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function insertPenjualan($data)
		{
			$this->db->insert('transaction.penjualan',$data);
		}

		public function getAllPengiriman(){
			$this->db->select('*');
			$this->db->from('transaction.transaksi_kartu');
			$this->db->where('status=','MENGIRIM');
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}
	}
?>