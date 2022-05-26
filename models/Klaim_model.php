<?php
	class Klaim_model extends CI_model{
		public function getKlaim(){
			$this->db->select('*');
			$this->db->from('klaim.tklaim');
			$query = $this->db->get();
			return $query->result();
		}

		public function getNoReg($noreg)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('noreg=',$noreg);
			$this->db->where('tgl_aktif<=',date('Y-m-d'));
			$this->db->where('tgl_expired>=',date('Y-m-d'));
			$query = $this->db->get();
			return $query->result();
		}

		public function klaimDaftar($table,$data){
			$this->db->insert($table,$data);
		}

		public function klaimCallProc($proc,$data){
			$result = $this->db->query($proc,$data);
			return $result->result();
		}

		public function getKlaimById($id)
		{
			$this->db->select('*');
			$this->db->from('transaction.klaim');
			$this->db->where('id=',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function hitungKlaim(){
			$this->db->select('*');
			$this->db->from('transaction.klaim');
			$query = $this->db->get();
			return $query->num_rows();
		}
		
		public function getLookupDetail($jenis_lookup){
			$this->db->select('*');
			$this->db->from('klaim.mlookupdetail');
			$this->db->where('kd_lookup=',$jenis_lookup);
			$query = $this->db->get();
			return $query->result();
		}

		public function getTKlaimByNoreg($noreg){
			$this->db->select('*');
			$this->db->from('klaim.tklaim');
			$this->db->where('noreg = ',$noreg);
			$query = $this->db->get();
			return $query->result();
		}

		public function getTKlaimById($id){
			$this->db->select('*');
			$this->db->from('klaim.tklaim');
			$this->db->where('no_kl = ',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function getTKlaimByPrimary($kd_cb,$kd_thn,$id){
			$this->db->select('*');
			$this->db->from('klaim.tklaim');
			$this->db->where('kd_cb = ',$kd_cb);
			$this->db->where('kd_thn = ',$kd_thn);
			$this->db->where('no_kl = ',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function getAllLookUpDetail($kd_lookup){
			$this->db->select('*');
			$this->db->from('klaim.mlookupdetail');
			$this->db->where('kd_lookup =',$kd_lookup);
			$this->db->order_by('no_lookup','asc');
			$query = $this->db->get();
			return $query->result();
		}

		public function updateKlaimById($data,$id){
			$this->db->where('no_kl',$id);
			$this->db->update('klaim.tklaim',$data);
		}

		public function getRiwayatKlaimByIdAndSebab($noreg,$jenis,$no_updt){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailsaldo');
			$this->db->where('no_jenis_pertanggungan =',$jenis);
			$this->db->where('noreg =',$noreg);
			$this->db->where('no_updt =',$no_updt);
			$query = $this->db->get();
			return $query->result();
		}

		public function getDetailJenisPertanggunganByIdAndSebab($id,$no_sebab){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailjenispertanggungan');
			$this->db->where('no_kl =',$id);
			$this->db->where('no_jenis_pertanggungan =',$no_sebab);
			$query = $this->db->get();
			return $query->result();
		}

		public function getDetailJenisPertanggunganById($no_kl){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailjenispertanggungan');
			$this->db->where('no_kl =',$no_kl);
			$this->db->order_by('no_jenis_pertanggungan','ASC');
			$query = $this->db->get();
			return $query->result();
		}

		public function getDetailJenisPertanggunganByPrimary($kd_cb,$kd_thn,$no_kl){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailjenispertanggungan');
			$this->db->where('kd_cb =',$kd_cb);
			$this->db->where('kd_thn =',$kd_thn);
			$this->db->where('no_kl =',$no_kl);
			$this->db->order_by('no_jenis_pertanggungan','ASC');
			$query = $this->db->get();
			return $query->result();
		}

		public function updateDetailJenisPertanggungan($data,$id){
			$this->db->where('no_urut',$id);
			$this->db->update('klaim.tklaimdetailjenispertanggungan',$data);
		}

		public function getDetailLookUpDetailByKdAndId($kd_lookup,$id){
			$this->db->select('*');
			$this->db->from('klaim.mlookupdetail');
			$this->db->where('kd_lookup =',$kd_lookup);
			$this->db->where('no_lookup =',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function getKlaimDocumentByIdAndNoDokumen($no_kl,$no_dok){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetaildokumen');
			$this->db->where('no_kl =',$no_kl);
			$this->db->where('no_dokumen =',$no_dok);
			$query = $this->db->get();
			return $query->result();
		}

		public function getKlaimDocumentById($no_kl){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetaildokumen');
			$this->db->where('no_kl =',$no_kl);
			$query = $this->db->get();
			return $query->result();
		}

		public function klaimDokumenUpdate($data,$id){
			$this->db->where('no_urut',$id);
			$this->db->update('klaim.tklaimdetaildokumen',$data);
		}

		public function deleteDokumenKlaim($id){
			$this->db->where('no_urut=',$id);
			$this->db->delete('klaim.tklaimdetaildokumen');
		}

		public function getNamaStatus($id){
			$this->db->select('*');
			$this->db->from('klaim.mstatusapproval');
			$this->db->where('kd_status=',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function getJenisKlaimTaken($id){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailjenispertanggungan');
			$this->db->where('no_kl = ',$id);
			$query = $this->db->get();
			return $query->result();
		}

		public function getDokumenRequired($jenisdokumen){
			$this->db->select('*');
			$this->db->from('klaim.mmapdokumenklaimdetail');
			$this->db->where('no_jns_dokumen = ', $jenisdokumen);
			$query = $this->db->get();
			return $query->result();
		}

		public function getValidasiJabatan($kd_approval){
			$this->db->select('*');
			$this->db->from('klaim.mroleapprovalklaimposition');
			$this->db->where('kd_approval = ',$kd_approval);
			$query = $this->db->get();
			return $query->result();
		}

		public function getUserByJabatan($kd_posisi){
			$this->db->select('*');
			$this->db->from('users.user');
			$this->db->where('kode_posisi = ',$kd_posisi);
			$query = $this->db->get();
			return $query->result();
		}

		public function updateToProsesKlaim($data){
			$call_proc = "CALL klaim.processKlaim(?,?,?,?,?,?,?,?,?)";
			$result = $this->db->query($call_proc,$data);
		}

		public function getKlaimProcess(){
			$this->db->select('*');
			$this->db->from('klaim.tklaim');
			$this->db->where('kd_approval = ',1);
			$this->db->where('kd_status = ', 2);
			$query = $this->db->get();
			return $query->result();
		}

		public function getDetailJenisKlaimByPrimary($kd_cb,$kd_thn,$no_kl){
			$this->db->select('*');
			$this->db->from('klaim.tklaimdetailjenispertanggungan');
			$this->db->where('kd_cb = ',$kd_cb);
			$this->db->where('kd_thn = ',$kd_thn);
			$this->db->where('no_kl = ',$no_kl);
			$query = $this->db->get();
			return $query->result();
		}
	}
?>