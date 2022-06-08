<?php
	class Peserta_model extends CI_model{
		public function hitungPesertaAktif(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d'));
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function hitungPesertaAktifSebulan(){
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function hitungPesertaExpiredSebulan(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function hitungKartuAktif(){
			$query = $this->db->get_where('transaction.kartu',array('flag'=>'5'));
			return $query->num_rows();
		}
		public function hitungKartuPemasaran(){
			$query = $this->db->get_where('transaction.kartu',array('flag'=>'3'));
			return $query->num_rows();
		}
		public function hitungKartuStock(){
			$query = $this->db->get_where('transaction.kartu',array('flag'=>'1'));
			return $query->num_rows();
		}
		public function getPesertaAktif($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d'));
			$this->db->limit(10,$offset);
			$this->db->order_by("tgl_aktif desc, id desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d'));
			$this->db->order_by('id',"desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifPage($page){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d'));
			$this->db->order_by('id',"desc");
			$this->db->limit(20,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifCetak(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d'));
			$this->db->order_by('id',"desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifSebulan($page=null){
			$offset = $page*10;
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->limit(10,$offset);
			$this->db->order_by("tgl_aktif desc, id desc");
			$query = $this->db->get();
			return $query->result();
		}
		public function getPesertaAktifSebulanAll(){
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->order_by('id',"desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifSebulanPage($page){
			$offset = $page*10;
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->order_by('id',"desc");
			$this->db->limit(20,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaAktifSebulanCetak(){
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->order_by('id',"desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaExpired($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+7 days')));
			$this->db->limit(10,$offset);
			$this->db->order_by('id',"desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaExpiredBulanan($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->limit(10,$offset);
			$this->db->order_by("tgl_expired desc, id desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaExpiredBulananAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaExpiredBulananPage($page){
			$offset = $page*20;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->limit(20,$offset);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaExpiredBulananCetak(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaById($id){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('id=',$id);
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaByNoRegNoPin($noreg,$nopin){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('noreg=',$noreg);
			$this->db->where('nopin=',$nopin);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaPerpanjangan(){
			//Get Peserta Perpanjangan, need approve first
		}
		public function pesertaDaftar($data,$table){
			$this->db->insert($table,$data);
		}

		public function updatePesertaById($data,$id){
			$this->db->where('id',$id);
			$this->db->update('transaction.peserta',$data);
		}

		public function updatePesertaRenewalById($data,$id){
			$this->db->where('id',$id);
			$this->db->update('transaction.peserta',$data);
		}

		public function getNoPin($nopin){
			$this->db->select('*');
			$this->db->from('transaction.kartu');
			$this->db->where('no_pin=',$nopin);
			$query = $this->db->get();
			return $query->result();
		}
		public function getNoNik($noktp){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >',date('Y-m-d',strtotime('+7 days')));
			$this->db->where('no_ktp =',$noktp);
			$this->db->order_by('tgl_expired','DESC');
			$query = $this->db->get();
			return $query->result();
		}
		public function updateNoPin($id){
			$array = array(
				'flag' => '5',
				'loc_id' => 'TERTANGGUNG'
			);
			$this->db->where('id',$id);
			$this->db->update('transaction.kartu',$array);
		}
		public function updateNoPinByPin($pin){
			$array = array(
				'flag' => '5',
				'loc_id' => 'TERTANGGUNG'
			);
			$this->db->where('no_pin',$pin);
			$this->db->update('transaction.kartu',$array);
		}
		public function getKartu($nopin,$noreg){
			$query = $this->db->get_where('transaction.kartu',array('no_pin'=>$nopin,'no_reg'=>$noreg,'flag'=>'3'));
			return $query->result();
		}
		public function getPesertaRenewal($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->or_where('status_renewal=','Menolak');
			$this->db->order_by("status_renewal desc,tgl_status desc, id desc");
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalWaiting($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->where('status_renewal=','Waiting');
			$this->db->order_by('status_renewal desc,tgl_status desc, id desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalWaitingAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->where('status_renewal=','Waiting');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalProses($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->where('status_renewal!=','Waiting');
			$this->db->where('status_renewal!=','Menolak');
			$this->db->order_by('status_renewal desc,tgl_status desc, id desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalProsesAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('flag_renewal=',TRUE);
			$this->db->where('status_renewal!=','Waiting');
			$this->db->where('status_renewal!=','Menolak');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalMenolak($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('status_renewal=','Menolak');
			$this->db->order_by('status_renewal desc,tgl_status desc, id desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getPesertaRenewalMenolakAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('status_renewal=','Menolak');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNoPinAktif($nopin,$page){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getCountNoPinAktif($nopin){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->like('nopin',$nopin);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNoPinAktivasi($nopin,$page){
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getCountNoPinAktivasi($nopin){
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNoPinAkanExpired($nopin,$page){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getCountNoPinAkanExpired($nopin){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNoRegAktif($noreg)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('noreg',$noreg);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function searchNoRegAktivasi($noreg)
		{
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->where('noreg',$noreg);
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNoRegAkanExpired($noreg)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->where('noreg',$noreg);
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNamaAktif($nama,$page)
		{
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}
		public function getCountNamaAktif($nama)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNamaAktivasi($nama,$page)
		{
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getCountNamaAktivasi($nama)
		{
			$tahun = date('Y');
			$bulan = date('m');
			$hari = '0';
			$hariakhir = '31';
			$tanggal = $tahun.'-'.$bulan.'-'.$hari;
			$tanggalakhir = $tahun.'-'.$bulan.'-'.$hariakhir;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',date('Y-m-d',strtotime($tanggal)));
			$this->db->where('tgl_reg<=',date('Y-m-d',strtotime($tanggalakhir)));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNamaAkanExpired($nama,$page)
		{
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function getCountNamaAkanExpired($nama)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired >=',date('Y-m-d'));
			$this->db->where('tgl_expired <=',date('Y-m-d',strtotime('+1 month')));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function searchNoPinExpired($page,$nopin){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired <',date('Y-m-d'));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNoPinExpiredAll($nopin){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired <',date('Y-m-d'));
			$this->db->like('nopin',$nopin);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNoRegExpired($noreg)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired <',date('Y-m-d'));
			$this->db->where('noreg',$noreg);
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNamaExpired($page,$nama)
		{
			$pageoffset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired <',date('Y-m-d'));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$pageoffset);
			$query = $this->db->get();
			return $query->result();
		}

		public function searchNamaExpiredAll($nama)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired <',date('Y-m-d'));
			$this->db->like('nama',$nama);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function pesertaExpired($page=null){
			$offset= $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired<',date('Y-m-d'));
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();
		}

		public function pesertaExpiredAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired<',date('Y-m-d'));
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function peserta($page=null){
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();			
		}
		
		public function pesertaAll(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();			
		}

		/*public function pesertaAllCetak($page){
			$pageoffset = $page*20;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->order_by('id','desc');
			$this->db->limit(20,$pageoffset);
			$query = $this->db->get();
			return $query->result();			
		}*/

		public function pesertaAllCetak(){
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();			
		}

		public function pesertaByDateAktif($tgl_awal,$tgl_akhir,$page)
		{
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_aktif>=',$tgl_awal);
			$this->db->where('tgl_aktif<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateAktifAll($tgl_awal,$tgl_akhir)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_aktif>=',$tgl_awal);
			$this->db->where('tgl_aktif<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateAktifAllCetak($tgl_awal,$tgl_akhir,$page)
		{
			$pageoffset = $page*20;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_aktif>=',$tgl_awal);
			$this->db->where('tgl_aktif<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(20,$pageoffset);
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateRegistrasi($tgl_awal,$tgl_akhir,$page)
		{
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',$tgl_awal);
			$this->db->where('tgl_reg<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateRegistrasiAll($tgl_awal,$tgl_akhir)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',$tgl_awal);
			$this->db->where('tgl_reg<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateRegistrasiAllCetak($tgl_awal,$tgl_akhir,$page)
		{
			$pageoffset = $page*20;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_reg>=',$tgl_awal);
			$this->db->where('tgl_reg<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(20,$pageoffset);
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateExpired($tgl_awal,$tgl_akhir,$page)
		{
			$offset = $page*10;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired>=',$tgl_awal);
			$this->db->where('tgl_expired<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(10,$offset);
			$query = $this->db->get();
			return $query->result();	
		}

		public function pesertaByDateExpiredAll($tgl_awal,$tgl_akhir)
		{
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired>=',$tgl_awal);
			$this->db->where('tgl_expired<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();	

		}
		public function pesertaByDateExpiredAllCetak($tgl_awal,$tgl_akhir,$page)
		{
			$pageoffset = $page*20;
			$this->db->select('*');
			$this->db->from('transaction.peserta');
			$this->db->where('tgl_expired>=',$tgl_awal);
			$this->db->where('tgl_expired<=',$tgl_akhir);
			$this->db->order_by('id','desc');
			$this->db->limit(20,$pageoffset);
			$query = $this->db->get();
			return $query->result();	

		}
	}
?>