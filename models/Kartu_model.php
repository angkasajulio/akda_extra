<?php
	class Kartu_model extends CI_model{
		public function getAllKartuPemasar(){
			$this->db->select('*');
			$this->db->from('transaction.kartu');
			$this->db->where('loc_id = ','PEMASAR');
			$this->db->order_by('no_reg','DESC');
			$query = $this->db->get();
			return $query->result();
		}
		public function cekKartuPemasar($jumlah,$start){
			$this->db->select('*');
			$this->db->from('transaction.kartu');
			$this->db->where('loc_id=','PEMASAR');
			$this->db->where('no_reg>',$start);
			$this->db->order_by('no_reg','ASC');
			$this->db->limit($jumlah);
			$query = $this->db->get();
			return $query->result();
		}
		public function updateStockTertanggung($awal,$akhir)
		{
			$array = array(
				'loc_id' => 'TERTANGGUNG'
			);
			$this->db->where('no_reg>=',$awal);
			$this->db->where('no_reg<=',$akhir);
			$this->db->update('transaction.kartu',$array);
		}
		public function getIdLastRequest(){
			$this->db->select('*');
			$this->db->from('transaction.transaksi_kartu');
			$this->db->order_by('id','desc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}

		public function insertRequestPemasar($data)
		{
			$this->db->insert('transaction.transaksi_kartu',$data);
		}

		public function getRequestPemasar($page=null)
		{
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.transaksi_kartu');
			$this->db->where('status=','MEMINTA');
			$this->db->limit(10,$offset);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getRequestPemasarApproved($page=null)
		{
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.transaksi_kartu');
			$this->db->where('status=','MENGIRIM');
			$this->db->limit(10,$offset);
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getAllKartuLogistik(){
			$this->db->select('*');
			$this->db->from('transaction.kartu');
			$this->db->where('loc_id = ','LOGISTIK');
			$this->db->order_by('no_reg','DESC');
			$query = $this->db->get();
			return $query->result();
		}
	}
?>