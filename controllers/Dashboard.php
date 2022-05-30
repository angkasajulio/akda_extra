<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PfpOffice\PhpSpreadsheet\Spreadsheet;
use PfpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dashboard extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('peserta_model');
		$this->load->model('klaim_model');
		$this->load->model('penjualan_model');
		$this->load->model('kartu_model');
		$this->load->model('users_model');
		$this->load->library('form_validation');
	}

	public function index_bayangan()
	{
		if($this->session->userdata('username')==''){
			//Kondisi untuk kembali pada menu login
			$this->session->set_flashdata('status','FALSE');
			$this->session->set_flashdata('url',base_url('login'));
			$this->session->set_flashdata('msg','
    			<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Anda Harus Login Untuk Akses Aplikasi.</p>
                </div>
    			');
		}else{
			//Kondisi untuk tetap pada menu dashboard
		}
		$data['jumlahpeserta'] = $this->peserta_model->hitungPesertaAktif();
		$data['jumlahpesertasebulan'] = $this->peserta_model->hitungPesertaAktifSebulan();
		$data['jumlahexpiredsebulan'] = $this->peserta_model->hitungPesertaExpiredSebulan();
		$data['jumlahkartuaktif'] = $this->peserta_model->hitungKartuAktif();
		$data['jumlahkartupemasaran'] = $this->peserta_model->hitungKartuPemasaran();
		$data['jumlahkartustock'] = $this->peserta_model->hitungKartuStock();
		$data['pesertaaktif'] = $this->peserta_model->getPesertaAktif();
		$data['pesertabulan'] = $this->peserta_model->getPesertaAktifSebulan();
		$data['expiredbulan'] = $this->peserta_model->getPesertaExpiredBulanan();
		$this->load->view('header');
		$this->load->view('dashboard',$data);
	}
	public function index(){
		if($this->session->userdata('username')==''){
			//Kondisi untuk kembali pada menu login
			$this->session->set_flashdata('status','FALSE');
			$this->session->set_flashdata('url',base_url('login'));
			$this->session->set_flashdata('msg','
    			<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Anda Harus Login Untuk Akses Aplikasi.</p>
                </div>
    			');
		}else{
			//Kondisi untuk tetap pada menu dashboard
		}
		$data['jumlahpeserta'] = $this->peserta_model->hitungPesertaAktif();
		$data['jumlahpesertasebulan'] = $this->peserta_model->hitungPesertaAktifSebulan();
		$data['jumlahexpiredsebulan'] = $this->peserta_model->hitungPesertaExpiredSebulan();
		$data['jumlahkartuaktif'] = $this->peserta_model->hitungKartuAktif();
		$data['jumlahkartupemasaran'] = $this->peserta_model->hitungKartuPemasaran();
		$data['jumlahkartustock'] = $this->peserta_model->hitungKartuStock();
		$data['pesertaaktif'] = $this->peserta_model->getPesertaAktif();
		$data['pesertabulan'] = $this->peserta_model->getPesertaAktifSebulan();
		$data['expiredbulan'] = $this->peserta_model->getPesertaExpiredBulanan();
		//$this->load->view('headerbayangan');
		//$this->load->view('sidebar');
		$this->load->view('dashboardbayangan',$data);
	}
	public function peserta(){
		$data['jumlahpeserta'] = $this->peserta_model->hitungPesertaAktif();
		$data['jumlahpesertasebulan'] = $this->peserta_model->hitungPesertaAktifSebulan();
		$data['jumlahexpiredsebulan'] = $this->peserta_model->hitungPesertaExpiredSebulan();				
		$data['pesertaaktif'] = $this->peserta_model->getPesertaAktif('0');
		//$data['pesertabulan'] = $this->peserta_model->getPesertaAktifSebulan($offset);
		//$data['expiredbulan'] = $this->peserta_model->getPesertaExpiredBulanan($offset);
		$this->load->view('pesertabayangan',$data);
	}

	public function peserta_aktif(){
		$data['pesertaaktif'] = $this->peserta_model->getPesertaAktif();
		//print_r($data);
		$this->load->view('header');
		$this->load->view('headerpeserta');
		$this->load->view('pesertaaktif',$data);    	
	}
	public function peserta_expired(){
		$data['pesertaexpired'] = $this->peserta_model->getPesertaExpired();
		//print_r($data);
		$this->load->view('header');
		$this->load->view('headerpeserta');
		$this->load->view('pesertaexpired',$data);
	}
	public function peserta_perpanjangan(){
		$this->load->view('header');
		$this->load->view('headerpeserta');
		$this->load->view('pesertaperpanjangan');
	}
	public function peserta_daftar(){
		$this->load->view('pesertadaftarbayangan');
	}
	public function act_peserta_daftar(){
		$validasi['kartu'] = $this->peserta_model->getNoPin($this->input->post('nopin'));
		$validasi['nonik'] = $this->peserta_model->getNoNik($this->input->post('nonik'));

		if(empty($validasi['kartu']))
		{
			echo 'tidak bisa daftar';
			$this->session->set_flashdata('pesan','
			<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Nomor PIN tidak tersedia atau salah</p>
                </div>
    			');
			redirect('dashboard/peserta_daftar');
		}else
		{
			$noreg = $validasi['kartu'][0]->no_reg;
			if(empty($validasi['nonik'])){
				$tanggal = date('Y-m-d',strtotime('+2 days',strtotime($this->input->post('tglregister'))));
				$tgl_expired = date('Y-m-d',strtotime('+1 years',strtotime($tanggal)));
				//$tanggal = $this->input->post('tglaktif');
				//$tgl_expired = $this->input->post('tglexpired');
			}else{
				//$tanggal = $validasi['nonik'][0]->tgl_expired;
				//$tgl_expired = date('Y-m-d',strtotime('+1 years',strtotime($tanggal)));
			}
			$data['nopin'] = $this->input->post('nopin');
			$data['noreg'] = $noreg;
			$data['no_ktp'] = $this->input->post('nonik');
			$data['nama'] = $this->input->post('nama');
			$data['alamat'] = $this->input->post('alamat');
			$data['tgllahir'] = date('Y-m-d',strtotime($this->input->post('tanggallahir')));
			$data['no_tlp'] = $this->input->post('notelp');
			$data['tgl_reg'] = $this->input->post('tglregister');
			$data['tgl_aktif'] = $tanggal;
			$data['tgl_expired'] = $tgl_expired;
			$data['premi'] = '50000';
			//print_r($data);
			$this->peserta_model->updateNoPin($validasi['kartu'][0]->id);
			$this->peserta_model->pesertaDaftar($data,'transaction.peserta');
			$this->session->set_flashdata('msg','
				<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Peserta berhasil terdaftar</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
				
				');
			redirect('dashboard/peserta');
		}
	}

	public function peserta_daftar_excel(){
		$this->load->view('pesertaexcel');
	}

	public function act_peserta_daftar_excel(){
		//$fileName = $_FILES['file']['name'];
		$fileName= 'data_'.date('Y-m-d-h-i-s-a');

		$config['upload_path'] = './upload/'; //path upload
        $config['file_name'] = $fileName;  // nama file
        $config['allowed_types'] = 'xlsx'; //tipe file yang diperbolehkan
        $config['max_size'] = 10000; // maksimal sizze
 
        $this->load->library('upload'); //meload librari upload
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('data_excel')){
        	echo 'Anda belum upload file';exit();
        }

        $inputFileName = FCPATH.'upload/'.$fileName.'.xlsx';
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($inputFileName); // Load file yang tadi diupload ke folder tmp
    	$sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    	$dataerror = NULL;
    	$dataformat = NULL;
    	$datatanggal=NULL;
    	$datakartu = NULL;
    	$dataduplicate = NULL;
		$dataniktersedia = NULL;
		$dataumur = NULL;
    	$pesan=NULL;
    	$numrow = 1;
    	$index=0;
    	$indexerror = 0;
    	$indexformat = 0;
    	$indextanggal = 0;
    	$indexkartu = 0;
    	$indexduplicate = 0;
		$indexniktersedia = 0;
		$indexumur = 0;
		$today = new DateTime('today');
    	$status='true';
    	foreach($sheet as $row){
    		if($numrow>5)
    		{
    			$data[$index] = array(
    		        "noreg"=> $row['B'],
    		        "nopin"=> $row['C'],
    		        "no_ktp"=> $row['D'],
    		        "nama"=> $row['E'],
    		        "tgllahir"=> $row['F'],
    		        "alamat"=> $row['G'],
    		        "tgl_aktif"=> $row['H'],
    		        "no_tlp"=> $row['I'],
    		    );
    		    $tanggal=explode('-', $data[$index]['tgllahir']);
    		    $tanggalaktif=explode('-',$data[$index]['tgl_aktif']);

    		    if($data[$index]['noreg'] == "" && $data[$index]['nopin'] == "" && $data[$index]['tgllahir'] == "" && $data[$index]['no_ktp'] == "" && $data[$index]['nama'] == "" && $data[$index]['alamat'] == "" && $data[$index]['tgl_aktif'] == "" && $data[$index]['no_tlp'] == "")
    		    {
    		    	continue;
    		    }
    		    if($data[$index]['noreg'] == "" || $data[$index]['nopin'] == "" || $data[$index]['tgllahir'] == "" || $data[$index]['no_ktp'] == "" || $data[$index]['nama'] == "" || $data[$index]['alamat'] == "" || $data[$index]['tgl_aktif'] == "" || $data[$index]['no_tlp'] == "")
    		    {
    		    	$dataerror[$indexerror]=$index+1;
    		    	$indexerror++;
    		    	$status='false';
    		    }
    		    if(preg_match("/[a-zA-Z]/", $data[$index]['noreg']) || preg_match("/[a-zA-Z]/", $data[$index]['tgllahir']) || preg_match("/[a-zA-Z]/", $data[$index]['tgl_aktif']) || preg_match("/[a-zA-Z]/", $data[$index]['no_tlp']) || preg_match("/[a-zA-Z]/", $data[$index]['no_ktp']) || preg_match("/[0-9]/", $data[$index]['nama']) || preg_match("/[a-zA-Z]/", $data[$index]['nopin'])){
    		    	$dataformat[$indexformat]=$index+1;
    		    	$indexformat++;
    		    	$status='false';
    		    }
    		    if($tanggal[2]>31 || $tanggal[1]>12 || $tanggal[0]<1800 || $tanggalaktif[2]>31 || $tanggalaktif[1]>12 || $tanggalaktif[0]<1800)
    		    {
    		    	$datatanggal[$indextanggal]=$index+1;
    		    	$indextanggal++;
    		    	$status='false';
    		    }else{
    		    	$data[$index]['tgl_expired'] = date('Y-m-d', strtotime('+1 years', strtotime($data[$index]['tgl_aktif'])));
    		    	$data[$index]['tgl_reg'] = date('Y-m-d', strtotime('-2 days', strtotime($data[$index]['tgl_aktif'])));
    		    }
    		    if(preg_match("/[a-zA-Z]/", $data[$index]['noreg']) || preg_match("/[a-zA-Z]/", $data[$index]['nopin']))
    		    {

    		    }else{
    		    	$kartu = $this->peserta_model->getKartu($data[$index]['nopin'],$data[$index]['noreg']);
    		    }
    		    if($kartu==NULL){
    		    	$datakartu[$indexkartu] = $index+1;
    		    	$indexkartu++;
    		    	$status='false';
    		    }
    		    for($j=0;$j<$index;$j++){
    		    	if($index==0){

    		    	}else
    		    	if($data[$j]['no_ktp']==$data[$index]['no_ktp'])
    		    	{
    		    		$dataduplicate[$indexduplicate]['indexbawah']=$j+1;
    		    		$dataduplicate[$indexduplicate]['indexatas']=$index+1;
    		    		$status='false';
    		    		$indexduplicate++;
    		    	}
    		    }
				$validasinonik = $this->peserta_model->getNoNik($data[$index]['no_ktp']);
				if(empty($validasinonik)){

				}else{
					//Gak bisa daftar NoNik Terdaftar
					$dataniktersedia[$indexniktersedia] = $index+1;
					$indexniktersedia++;
					$status='false';
				}
				$tanggalumur = new DateTime($data[$index]['tgllahir']);
				$age = $today->diff($tanggalumur)->y;
				echo $age;
				if($age<10 || $age>65){
					$dataumur[$indexumur] = $index+1;
					$indexumur++;
					$status='false';
					echo 'gak bisa daftar karena umur';
				}
    		    $index++;
    		} 
    		$numrow++;
    	}
    	print_r($dataduplicate);
    	if($dataerror!=NULL){
    		//echo 'kosong';
    		//echo count($dataerror);
    		//print_r($dataerror);
    		for($i=0;$i<count($dataerror);$i++)
    			{
    				if($i==0){
    					$bariserror = $dataerror[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$dataerror[$i];
    				}
    				
    			}
    		$pesan = 'Data kosong pada baris: '.$bariserror;
    		
    	}
    	if($dataformat!=NULL){
    		//echo 'salahformat';
    		//echo count($dataformat);
    		//print_r($dataformat);
    		for($i=0;$i<count($dataformat);$i++)
    			{
    				if($i==0){
    					$bariserror = $dataformat[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$dataformat[$i];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Cek penulisan anda pada baris: '.$bariserror;
    		}else{
    			$pesan = 'Cek penulisan anda pada baris: '.$bariserror;
    		}
    	}
    	if($datatanggal!=NULL){
    		//echo 'salahtanggal';
    		//echo count($datatanggal);
    		//print_r($datatanggal);
    		for($i=0;$i<count($datatanggal);$i++)
    			{
    				if($i==0){
    					$bariserror = $datatanggal[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$datatanggal[$i];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Cek Format Penulisan Tanggal Anda pada baris: '.$bariserror;
    		}else{
    			$pesan = 'Cek Format Penulisan Tanggal Anda pada baris: '.$bariserror;
    		}
    	}
    	if($datakartu!=NULL){
    		//echo 'salahtanggal';
    		//echo count($datatanggal);
    		//print_r($datatanggal);
    		for($i=0;$i<count($datakartu);$i++)
    			{
    				if($i==0){
    					$bariserror = $datakartu[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$datakartu[$i];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Cek Kartu Anda pada baris: '.$bariserror;
    		}else{
    			$pesan = 'Cek Kartu Anda pada baris: '.$bariserror;
    		}
    	}
    	if($dataduplicate!=NULL){
    		//echo 'salahtanggal';
    		//echo count($datatanggal);
    		//print_r($datatanggal);
    		for($i=0;$i<count($dataduplicate);$i++)
    			{
    				if($i==0){
    					$bariserror = $dataduplicate[$i]['indexbawah'].' dan '.$dataduplicate[$i]['indexatas'];
    				}else
    				{
    					$bariserror = $bariserror.'<br>'.$dataduplicate[$i]['indexbawah'].' dan '.$dataduplicate[$i]['indexatas'];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Duplicate data nomor identitas pada baris: <br>'.$bariserror;
    		}else{
    			$pesan = '<br>Duplicate data nomor identitas pada baris: <br>'.$bariserror;
    		}
    	}
		if($dataniktersedia!=NULL){
    		//echo 'salahtanggal';
    		//echo count($datatanggal);
    		//print_r($datatanggal);
    		for($i=0;$i<count($dataniktersedia);$i++)
    			{
    				if($i==0){
    					$bariserror = $dataniktersedia[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$dataniktersedia[$i];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Nomor Identitas Telah Terdaftar Pada Baris: '.$bariserror;
    		}else{
    			$pesan = 'Nomor Identitas Telah Terdaftar Pada Baris: '.$bariserror;
    		}
    	}
		if($dataumur!=NULL){
    		//echo 'salahtanggal';
    		//echo count($datatanggal);
    		//print_r($datatanggal);
    		for($i=0;$i<count($dataumur);$i++)
    			{
    				if($i==0){
    					$bariserror = $dataumur[$i];
    				}else
    				{
    					$bariserror = $bariserror.', '.$dataumur[$i];
    				}    				
    			}
    		if($pesan!=NULL){
    			$pesan = $pesan.'<br>Umur Tidak Sesuai Ketentuan Pada Baris: '.$bariserror;
    		}else{
    			$pesan = 'Umur Tidak Sesuai Ketentuan Pada Baris: '.$bariserror;
    		}
    	}
        if($status=='false'){
        	$this->session->set_flashdata('msg','
    			<section class="" style="padding-top=25px;">
	                <div class="container">
	                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" role="alert">
	                        <span class="content">'.$pesan.'</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
	                </div>
	            </section>

    			');
        	redirect('dashboard/peserta_daftar_excel');
        }
        else{
        	$this->session->set_flashdata('msg','
    			<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Peserta berhasil terdaftar</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
    			');
        	//print_r($data);
        	for($i=0;$i<count($data);$i++){
        		$this->peserta_model->pesertaDaftar($data[$i],'transaction.peserta');
        		$this->peserta_model->updateNoPinByPin($data[$i]['nopin']);
        	}
        	redirect('dashboard/peserta');
        }
	}

	public function edit_peserta($id){
		$data['peserta'] = $this->peserta_model->getPesertaById($id);
		$this->load->view('editpeserta',$data);
	}

	public function act_peserta_edit(){
		$data['no_ktp'] = $this->input->post('nonik');
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['tgllahir'] = $this->input->post('tanggallahir');
		$data['no_tlp'] = $this->input->post('notelp');
		$id = $this->input->post('id_peserta');
		$this->peserta_model->updatePesertaById($data,$id);
		$this->session->set_flashdata('msg','
				<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Peserta berhasil terupdate</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
				
				');
		$this->session->set_flashdata('status_peserta',$this->input->post('statusPeserta'));
		$this->session->set_flashdata('noreg_peserta',$this->input->post('noregPeserta'));
		$this->session->set_flashdata('nopin_peserta',$this->input->post('nopinPeserta'));
		$this->session->set_flashdata('nama_peserta',$this->input->post('namaPeserta'));
		$this->session->set_flashdata('page_peserta',$this->input->post('pagePeserta'));
			redirect('dashboard/peserta');

	}

	public function act_peserta_edit_renewal(){
		$id = $this->input->post('id_peserta');
		$data['status_renewal'] = 'Proses';
		$data['keterangan_renewal'] = $this->input->post('keterangan');
		$this->peserta_model->updatePesertaRenewalById($data,$id);
		$this->session->set_flashdata('page',$this->input->post('page_peserta'));
		$this->session->set_flashdata('msg','
			<section class ="" style="padding-top: 25px;">
                <div class="container">
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                	<span class="content">Peserta berhasil terupdate</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                </div>
                </div>
        	</section>
		');
		redirect('dashboard/peserta_renewal');
	}

	public function history($page=null)
	{	
		$data['expired'] = $this->peserta_model->PesertaExpired(0);
		$data['jumlahpeserta'] = count($this->peserta_model->PesertaExpiredAll());
		//print_r($data['expired']);
		$this->load->view('history',$data);
	}

	public function peserta_renewal(){
		
		if(empty($this->input->post('status')))
		{
			$data['pesertarenewal'] = $this->peserta_model->getPesertaRenewal(0);
			$this->load->view('pesertarenewal',$data);
		}else
		{
			$data['status'] =$this->input->post('status');
			if($data['status']=='Waiting'){
				$data['pesertarenewal'] = $this->peserta_model->getPesertaRenewalWaiting(0);
			}else
			if($data['status']=='Proses'){
				$data['pesertarenewal'] = $this->peserta_model->getPesertaRenewalProses(0);
			}
			if($data['status']=='Menolak'){
				$data['pesertarenewal'] = $this->peserta_model->getPesertaRenewalMenolak(0);
			}
			$this->load->view('pesertarenewal',$data);
		}
	}

	public function getPesertaRenewal($page,$status=null){
		if(empty($status)){
			$data = $this->peserta_model->getPesertaRenewal($page);
		}elseif($status=='Waiting'){
			$data = $this->peserta_model->getPesertaRenewalWaiting($page);
		}elseif($status=='Proses'){
			$data = $this->peserta_model->getPesertaRenewalProses($page);
		}elseif($status=='Menolak'){
			$data = $this->peserta_model->getPesertaRenewalMenolak($page);
		}
		
		echo json_encode($data);
	}

	public function kartu(){
		$this->load->view('header');
		$this->load->view('headerkartu');
		$this->load->view('kartu');
	}
	public function kartu_aktif(){
		$this->load->view('header');
		$this->load->view('headerkartu');
		$this->load->view('kartuaktif');
	}
	public function kartu_stock(){
		$this->load->view('header');
		$this->load->view('headerkartu');
		$this->load->view('kartustock');
	}

	public function klaim(){
		$data['dataklaim'] = $this->klaim_model->getKlaim();
		foreach ($data['dataklaim'] as $klaim) {
			$getstatus = $this->klaim_model->getNamaStatus($klaim->kd_status);
			$klaim->nama_status = $getstatus[0]->nm_status;
		}
		$data['jumlahklaim'] = $this->klaim_model->hitungKlaim();
		$data['penyebab_klaim'] = $this->klaim_model->getLookupDetail(1);
		$data['jenis_klaim'] = $this->klaim_model->getLookupDetail(2);
		/*$this->load->view('header');
		$this->load->view('headerklaim');
		$this->load->view('klaim',$data);*/
		$this->load->view('klaimbayangan',$data);
	}

	public function klaim_register($kd_cb=null,$kd_thn=null,$id=null,$status=null){
		$data['penyebab_klaim'] = $this->klaim_model->getLookupDetail(1);
		$data['jenis_klaim'] = $this->klaim_model->getLookupDetail(2);
		$data['klaimstatus'] = $status;
		$data['id'] = $id;
		$data['kd_cb'] = $kd_cb;
		$data['kd_thn'] = $kd_thn;
		$this->load->view('klaimregisterbayangan',$data);
	}

	public function getTKlaimById($id=null){
		if(empty($id)){

		}else{
			$data = $this->klaim_model->getTKlaimById($id);
			foreach ($data as $klaim) {
				$peserta = $this->peserta_model->getPesertaByNoRegNoPin($klaim->noreg,$klaim->nopin);
				$klaim->tgl_kepesertaan = $peserta[0]->tgl_aktif;
			}
		}
		echo json_encode($data);
	}

	public function getTKlaimByPrimary($kd_cb,$kd_thn,$id=null){
		if(empty($id)){

		}else{
			$data = $this->klaim_model->getTKlaimByPrimary($kd_cb,$kd_thn,$id);
			foreach ($data as $klaim) {
				$peserta = $this->peserta_model->getPesertaByNoRegNoPin($klaim->noreg,$klaim->nopin);
				$klaim->tgl_kepesertaan = $peserta[0]->tgl_aktif;
			}
		}
		echo json_encode($data);
	}

	public function getPenyebabKlaim(){
		$data = $this->klaim_model->getAllLookUpDetail(1);
		echo json_encode($data);
	}

	public function act_klaim_daftar(){
		//Mendapatkan data dari post
		$data['nama'] = $this->input->post('nama');
		$data['noreg'] = $this->input->post('noreg');
		$data['alamat'] = $this->input->post('alamat');
		$data['jenis_klaim'] = $this->input->post('jenisklaim');
		$data['tgl_klaim'] = date('Y-m-d',strtotime($this->input->post('tanggalklaim')));
		$data['penyebab_klaim'] = $this->input->post('penyebabklaim');
		$data['nilai_klaim'] = $this->input->post('nilaiklaim');
		$data['formulir_klaim'] = $this->input->post('formulir_klaim');
		$data['kartu_akda_extra'] = $this->input->post('kartu_akda_extra');
		$data['surat_keterangan_kecelakaan'] = $this->input->post('surat_keterangan_kecelakaan');
		$data['ktp_tertanggung'] = $this->input->post('ktp_tertanggung');
		$data['ktp_ahli_waris'] = $this->input->post('ktp_ahli_waris');
		$data['kwitansi'] = $this->input->post('kwitansi');
		$data['surat_keterangan_cacat'] = $this->input->post('surat_keterangan_cacat');
		$data['surat_keterangan_ahli_waris'] = $this->input->post('surat_keterangan_ahli_waris');
		$data['surat_keterangan_kematian'] = $this->input->post('surat_keterangan_kematian');

		//Cek apakah nomor register tersebut masih terse
		$validasi['noreg'] = $this->klaim_model->getNoReg($this->input->post('noreg'));
		if(empty($validasi['noreg'])){
			$this->session->set_flashdata('pesan','
				<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Nomor register yang anda masukan salah atau masa kepesertaan telah habis</p>
                </div>
			');
			redirect('dashboard/klaim_register');
		}else{
			$this->klaim_model->klaimDaftar('transaction.klaim',$data);
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success">
                    <h4>Berhasil</h4>
                    <p>Anda berhasil register klaim</p>
                </div>
			');
			redirect('dashboard/klaim');
		}
		print_r($data['noreg']);
	}
	public function klaim_edit($id){
		$data['klaim'] = $this->klaim_model->getKlaimById($id);
		print_r($data);
		$this->load->view('header');
		$this->load->view('headerklaim');
		$this->load->view('klaimedit',$data);
	}
	public function cetak(){
		$data['pesertaaktif'] = $this->peserta_model->getPesertaAktif();
		//header("Content-type: application/vnd.ms-excel");
		//header('Content-Disposition: attachment; filename="name_of_excel_file.xls"');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="userList.xls"');
		echo'
		<table>
			<thead>
				<tr>
					<td>NO.REG</td>
					<td>NO.PIN</td>
					<td>NAMA</td>
					<td>TGL.REGISTER</td>
					<td>TGL.AKTIF</td>
					<td>TGL.BERAKHIR</td>
				</tr>
			</thead>
			<tbody>
		';
		foreach ($data['pesertaaktif'] as $peserta) {
			echo "<tr>";
	            echo "<td>".$peserta->noreg."</td>";
	            echo "<td>".$peserta->nopin."</td>";
	            echo "<td>".$peserta->nama."</td>";
	            echo "<td>".$peserta->tgl_reg."</td>";
	            echo "<td>".$peserta->tgl_aktif."</td>";
	            echo "<td>".$peserta->tgl_expired."</td>";
	        echo "</tr>";
		}
		echo "</tbody></table>";
	}

    public function cetak_peserta($status){
        /*if($status=='aktif'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifAll();
			$data['peserta'] = $this->peserta_model->getPesertaAktifPage(0);
        }else
        if($status=='aktivasi'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifSebulanAll();
			$data['peserta'] = $this->peserta_model->getPesertaAktifSebulanPage(0);
        }else
        if($status=='expired'){
            //$data['peserta'] = $this->peserta_model->getPesertaExpiredBulananAll();
			$data['peserta'] = $this->peserta_model->getPesertaExpiredBulananPage(0);
        }*/
        $data['status'] = $status;
		$data['jenistanggal'] = "";
		$data['tgl_awal'] = "";
		$data['tgl_akhir'] = "";
    	$this->load->view('cetakpeserta',$data);
    }

	/*public function next_cetak_peserta($status,$page){
		$data = '';
		if($status=='aktif'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifAll();
			$data = $this->peserta_model->getPesertaAktifPage($page);
        }else
        if($status=='aktivasi'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifSebulanAll();
			$data = $this->peserta_model->getPesertaAktifSebulanPage($page);
        }else
        if($status=='expired'){
            //$data['peserta'] = $this->peserta_model->getPesertaExpiredBulananAll();
			$data = $this->peserta_model->getPesertaExpiredBulananPage($page);
        }
		echo json_encode($data);
	}*/

	public function next_cetak_peserta($status){
		$data = '';
		if($status=='aktif'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifAll();
			$data = $this->peserta_model->getPesertaAktifCetak();
        }else
        if($status=='aktivasi'){
            //$data['peserta'] = $this->peserta_model->getPesertaAktifSebulanAll();
			$data = $this->peserta_model->getPesertaAktifSebulanCetak();
        }else
        if($status=='expired'){
            //$data['peserta'] = $this->peserta_model->getPesertaExpiredBulananAll();
			$data = $this->peserta_model->getPesertaExpiredBulananCetak();
        }
		echo json_encode($data);
	}

	public function cetak_info_peserta($id){
		//Memanggil library
		$this->load->library('pdfgenerator');

		//filename pdf ketika di download
		$file_pdf = 'E - Polis Peserta Akda Extra';

		//Ukuran kertas
		$paper = 'A4';

		//Orientasi Paper
		$orientation = "potrait";

		//Pengambilan data dari database
        $data['peserta'] = $this->peserta_model->getPesertaById($id);
    	
		//Mengambil page php yang menjadi pdf
		$html = $this->load->view('cetakinfopeserta',$data,true);

		//Run Library
		$this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
    }

	public function cetak_polis_peserta($id){
		//Memanggil library
		$this->load->library('pdfgenerator');

		//filename pdf ketika di download
		$file_pdf = 'E - Polis Peserta Akda Extra';

		//Ukuran kertas
		$paper = 'A4';

		//Orientasi Paper
		$orientation = "potrait";

		//Pengambilan data dari database
        $data['peserta'] = $this->peserta_model->getPesertaById($id);

		//Generate QRCODE
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './images/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

		$params['data'] = $data['peserta'][0]->nama;
		$params['data'] .= "
".$data['peserta'][0]->noreg;
		$params['data'] .= "
".$data['peserta'][0]->nopin;
		$params['savename'] = FCPATH.$config['imagedir'].$data['peserta'][0]->noreg;
		$this->ciqrcode->generate($params);

		//memanggil html untuk dijadikan PDF
		$html = $this->load->view('cetakpolisbayangan',$data,true);

		//run dompdf
		$this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
		//$this->load->view('cetakpolisbayangan',$data);
    }

	public function schedule_polis(){
		$this->load->view('cetakpolis');
	}
	
	public function act_cetak_schedule_peserta(){
		$noreg = $this->input->post('noreg');
		$nopin = $this->input->post('nopin');
		$validasi = $this->peserta_model->getPesertaByNoRegNoPin($noreg,$nopin);
		if(empty($validasi)){
			$this->session->set_flashdata('msg','
    			<section class="" style="padding-top=25px;">
	                <div class="container">
	                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" role="alert">
	                        <span class="content">Silahkan cek kembali Nomor Pin dan Nomor Register Anda</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
	                </div>
	            </section>

    			');
        	redirect('dashboard/schedule_polis');
		}else{
			$id = $validasi[0]->id;
			//Memanggil library
			$this->load->library('pdfgenerator');

			//filename pdf ketika di download
			$file_pdf = 'E - Polis Peserta Akda Extra';

			//Ukuran kertas
			$paper = 'A4';

			//Orientasi Paper
			$orientation = "potrait";

			//Pengambilan data dari database
			$data['peserta'] = $this->peserta_model->getPesertaById($id);

			//Generate QRCODE
			$this->load->library('ciqrcode'); //pemanggilan library QR CODE
	
			$config['cacheable']    = true; //boolean, the default is true
			$config['cachedir']     = './assets/'; //string, the default is application/cache/
			$config['errorlog']     = './assets/'; //string, the default is application/logs/
			$config['imagedir']     = './images/qrcode/'; //direktori penyimpanan qr code
			$config['quality']      = true; //boolean, the default is true
			$config['size']         = '1024'; //interger, the default is 1024
			$config['black']        = array(224,255,255); // array, default is array(255,255,255)
			$config['white']        = array(70,130,180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			$params['data'] = $data['peserta'][0]->nama;
			$params['data'] .= "
".$data['peserta'][0]->noreg;
			$params['data'] .= "
".$data['peserta'][0]->nopin;
			$params['savename'] = FCPATH.$config['imagedir'].$data['peserta'][0]->noreg;
			$this->ciqrcode->generate($params);

			//memanggil html untuk dijadikan PDF
			$html = $this->load->view('cetakpolisbayangan',$data,true);

			//run dompdf
			$this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
			//$this->load->view('cetakpolisbayangan',$data);
		}
    }

	/*public function cetak_query(){
		$jenistanggal = $this->input->post('tanggal');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		if(empty($jenistanggal) && empty($tgl_awal) && empty($tgl_akhir)){
			$data['peserta'] = $this->peserta_model->pesertaAllCetak(0);
		}elseif($jenistanggal=='tgl_reg'){
			//cetak peserta berdasarkan tanggal register
			$data['peserta'] = $this->peserta_model->pesertaByDateRegistrasiAllCetak($tgl_awal,$tgl_akhir,0);
		}elseif($jenistanggal=='tgl_aktif'){
			//cetak peserta berdasarkan tanggal aktif
			$data['peserta'] = $this->peserta_model->pesertaByDateAktifAllCetak($tgl_awal,$tgl_akhir,0);
		}elseif($jenistanggal=='tgl_expired'){
			//cetak peserta berdasarkan tanggal expired
			$data['peserta'] = $this->peserta_model->pesertaByDateExpiredAllCetak($tgl_awal,$tgl_akhir,0);
		}
		$data['status']="";
		$data['jenistanggal'] = $this->input->post('tanggal');
		$data['tgl_awal'] = $this->input->post('tgl_awal');
		$data['tgl_akhir'] = $this->input->post('tgl_akhir');
		//print_r($data['peserta']);
		$this->load->view('cetakpesertabayangan',$data);
	}*/

	public function cetak_query(){
		$data['status']="";
		$data['jenistanggal'] = $this->input->post('tanggal');
		$data['tgl_awal'] = $this->input->post('tgl_awal');
		$data['tgl_akhir'] = $this->input->post('tgl_akhir');
		//print_r($data['peserta']);
		$this->load->view('cetakpesertaquery',$data);
	}

	/*public function next_cetak_peserta_query($jenistanggal,$tgl_awal,$tgl_akhir,$page){
		$data = '';
		if($jenistanggal=="null" && $tgl_awal=="null" && $tgl_akhir=="null"){
			$data = $this->peserta_model->pesertaAllCetak($page);
		}elseif($jenistanggal=='tgl_reg'){
			//cetak peserta berdasarkan tanggal register
			$data = $this->peserta_model->pesertaByDateRegistrasiAllCetak($tgl_awal,$tgl_akhir,$page);
		}elseif($jenistanggal=='tgl_aktif'){
			//cetak peserta berdasarkan tanggal aktif
			$data = $this->peserta_model->pesertaByDateAktifAllCetak($tgl_awal,$tgl_akhir,$page);
		}elseif($jenistanggal=='tgl_expired'){
			//cetak peserta berdasarkan tanggal expired
			$data = $this->peserta_model->pesertaByDateExpiredAllCetak($tgl_awal,$tgl_akhir,$page);
		}
		echo json_encode($data);
	}*/

	public function next_cetak_peserta_query($jenistanggal,$tgl_awal,$tgl_akhir){
		$data = '';
		if($jenistanggal=="null" && $tgl_awal=="null" && $tgl_akhir=="null"){
			$data = $this->peserta_model->pesertaAllCetak();
		}elseif($jenistanggal=='tgl_reg'){
			//cetak peserta berdasarkan tanggal register
			$data = $this->peserta_model->pesertaByDateRegistrasiAll($tgl_awal,$tgl_akhir);
		}elseif($jenistanggal=='tgl_aktif'){
			//cetak peserta berdasarkan tanggal aktif
			$data = $this->peserta_model->pesertaByDateAktifAll($tgl_awal,$tgl_akhir);
		}elseif($jenistanggal=='tgl_expired'){
			//cetak peserta berdasarkan tanggal expired
			$data = $this->peserta_model->pesertaByDateExpiredAll($tgl_awal,$tgl_akhir);
		}
		echo json_encode($data);
	}

	public function cetak_peserta_renewal($status){
        $data['status'] = $status;
    	$this->load->view('cetakpesertarenewal',$data);
    }
	public function next_cetak_peserta_renewal($status){
		$data = '';
		if($status=='All'){
			$data = $this->peserta_model->getPesertaRenewalAll();
		}elseif($status=='Waiting'){
			//cetak peserta berdasarkan tanggal register
			$data = $this->peserta_model->getPesertaRenewalWaitingAll();
		}elseif($status=='Proses'){
			//cetak peserta berdasarkan tanggal aktif
			$data = $this->peserta_model->getPesertaRenewalProsesAll();
		}elseif($status=='Menolak'){
			//cetak peserta berdasarkan tanggal aktif
			$data = $this->peserta_model->getPesertaRenewalMenolakAll();
		}
		echo json_encode($data);
	}

	public function cekNoreg($nopin){
		$validasi = $this->peserta_model->getNoPin($nopin);
		/*$data = array(
			'noreg' => $validasi['kartu']->no_reg,
		);*/
		echo json_encode($validasi);
	}

	public function cekNoNik($nonik){
		$validasi = $this->peserta_model->getNoNik($nonik);
		echo json_encode($validasi);
	}

	public function searchPinAktif($page,$nopin,$status){
		if($status=='aktif'){
			$data = $this->peserta_model->searchNoPinAktif($nopin,$page);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->searchNoPinAktivasi($nopin,$page);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->searchNoPinAkanExpired($nopin,$page);
		}
		echo json_encode($data);
	}

	public function countPinAktif($nopin,$status){
		if($status=='aktif'){
			$data = $this->peserta_model->getCountNoPinAktif($nopin);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->getCountNoPinAktivasi($nopin);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->getCountNoPinAkanExpired($nopin);
		}
		echo json_encode($data);
	}

	public function searchNoRegAktif($noreg,$status){
		if($status=='aktif'){
			$data = $this->peserta_model->searchNoRegAktif($noreg);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->searchNoRegAktivasi($noreg);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->searchNoRegAkanExpired($noreg);
		}
		echo json_encode($data);
	}
	public function countNoRegAktif($nopin,$status){
		if($status=='aktif'){
			$data = $this->peserta_model->getCountNoRegAktif($nopin);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->getCountNoRegAktivasi($nopin);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->getCountNoRegAkanExpired($nopin);
		}
		echo json_encode($data);
	}

	public function searchNamaAktif($page,$nama,$status){
		$namaconvert = str_replace("%20", " ", $nama);
		if($status=='aktif'){
			$data = $this->peserta_model->searchNamaAktif($namaconvert,$page);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->searchNamaAktivasi($namaconvert,$page);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->searchNamaAkanExpired($namaconvert,$page);
		}
		echo json_encode($data);
	}

	public function countNamaAktif($nama,$status){
		$namaconvert = str_replace("%20", " ", $nama);
		if($status=='aktif'){
			$data = $this->peserta_model->getCountNamaAktif($namaconvert);
		}else
		if($status=='aktivasi'){
			$data = $this->peserta_model->getCountNamaAktivasi($namaconvert);
		}else
		if($status=='expired'){
			$data = $this->peserta_model->getCountNamaAkanExpired($namaconvert);
		}
		echo json_encode($data);
	}

	public function searchPinExpired($page,$nopin){
		$data = $this->peserta_model->searchNoPinExpired($page,$nopin);
		echo json_encode($data);
	}

	public function countPinExpired($nopin){
		$data = count($this->peserta_model->searchNoPinExpiredAll($nopin));
		echo json_encode($data);
	}

	public function searchRegExpired($noreg){
		$data = $this->peserta_model->searchNoRegExpired($noreg);
		echo json_encode($data);
	}
	
	public function searchNamaExpired($page,$nama){
		$namaconvert = str_replace("%20", " ", $nama);
		$data = $this->peserta_model->searchNamaExpired($page,$namaconvert);
		echo json_encode($data);
	}

	public function countNamaExpired($nama){
		$namaconvert = str_replace("%20", " ", $nama);
		$data = count($this->peserta_model->searchNamaExpiredAll($namaconvert));
		echo json_encode($data);
	}

	 public function getPeserteExpired($page){
		 $data = $this->peserta_model->PesertaExpired($page);
		 echo json_encode($data);
	 }

	 public function CountPeserteExpired(){
		$data = count($this->peserta_model->PesertaExpiredAll());
		echo json_encode($data);
	}

	public function query()
	{
		if(empty($this->input->post('tgl_awal')) && empty($this->input->post('tgl_akhir'))&& empty($this->input->post('tanggal'))){
			$data['peserta'] = $this->peserta_model->peserta('0');
			$data['jumlahpeserta'] = count($this->peserta_model->pesertaAll());
			$data['tgl_awal'] = '';
			$data['tgl_akhir'] = '';
			$data['tanggal'] = '';
		}else{
			if($this->input->post('tanggal')=='tgl_reg'){
				$data['peserta'] = $this->peserta_model->pesertaByDateRegistrasi($this->input->post('tgl_awal'),$this->input->post('tgl_akhir'),'0');
				$data['jumlahpeserta'] = count($this->peserta_model->pesertaByDateRegistrasiAll($this->input->post('tgl_awal'),$this->input->post('tgl_akhir')));
			}else
			if($this->input->post('tanggal')=='tgl_aktif'){
				$data['peserta'] = $this->peserta_model->pesertaByDateAktif($this->input->post('tgl_awal'),$this->input->post('tgl_akhir'),'0');
				$data['jumlahpeserta'] = count($this->peserta_model->pesertaByDateAktifAll($this->input->post('tgl_awal'),$this->input->post('tgl_akhir')));
			}else
			if($this->input->post('tanggal')=='tgl_expired')
			{
				$data['peserta'] = $this->peserta_model->pesertaByDateExpired($this->input->post('tgl_awal'),$this->input->post('tgl_akhir'),'0');
				$data['jumlahpeserta'] = count($this->peserta_model->pesertaByDateExpiredAll($this->input->post('tgl_awal'),$this->input->post('tgl_akhir')));
			}			
			$data['tgl_awal'] = $this->input->post('tgl_awal');
			$data['tgl_akhir'] = $this->input->post('tgl_akhir');
			$data['tanggal'] = $this->input->post('tanggal');
		}
		$this->load->view('query',$data);
	}

	public function getPesertaByStatus($page,$status){
		if($status=="aktif"){
			$data = $this->peserta_model->getPesertaAktif($page);
		}else
		if($status=="aktivasi"){
			$data = $this->peserta_model->getPesertaAktifSebulan($page);
		}else
		if($status=="expired"){
			$data = $this->peserta_model->getPesertaExpiredBulanan($page);
		}
		echo json_encode($data);
	}
	
	public function getAllPeserta($page){
		$data = $this->peserta_model->peserta($page);
		echo json_encode($data);
	}

	public function getPesertaByDate($page,$jenistanggal,$tanggalawal,$tanggalakhir){
		if($jenistanggal=='tgl_reg'){
			$data = $this->peserta_model->pesertaByDateRegistrasi($tanggalawal,$tanggalakhir,$page);
		}else
		if($jenistanggal=='tgl_aktif'){
			$data = $this->peserta_model->pesertaByDateAktif($tanggalawal,$tanggalakhir,$page);
		}else
		if($jenistanggal=='tgl_expired')
		{
			$data = $this->peserta_model->pesertaByDateExpired($tanggalawal,$tanggalakhir,$page);
		}	
		echo json_encode($data);
	}

	public function rekanan($page=null)
	{
		if(empty($page)){
			$data['halaman']=1;
			$offset = $data['halaman']-1;
		}else
		{
			$data['halaman']=$page;
			$offset = $page-1;
		}
		$data['rekantertanggung'] = $this->penjualan_model->rekananTertanggung($offset);
		$data['rekanmarketing'] = $this->penjualan_model->rekananMarketing($offset);
		$data['jumlahtertanggung'] = count($data['rekantertanggung']);
		$data['jumlahmarketing'] = count($data['rekanmarketing']);
		$this->load->view('rekanan',$data);
	}

	public function tambah_rekanan(){
		$data['id'] = $this->penjualan_model->getIdLastRekanan();
		$this->load->view('tambah_rekanan',$data);
	}

	public function searchNamaRekanan($nama){
		$namaconvert = str_replace("%20", " ", $nama);
		$data = $this->penjualan_model->searchNamaRekanan($namaconvert);
		echo json_encode($data);
	}

    public function act_rekanan_daftar()
    {
        $data['nama'] =  $this->input->post('nama');
        $data['alamat']= $this->input->post('alamat');
        $data['no_id'] = $this->input->post('noktp');
        $data['no_npwp'] = $this->input->post('nonpwp');
        $data['status'] = $this->input->post('status');
        $data['pic'] = $this->input->post('pic');
        $data['nomor_hp_pic'] = $this->input->post('nopic');
        $this->penjualan_model->insertRekanan($data);
        $this->session->set_flashdata('msg','
                <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <span class="content">Rekanan berhasil ditambahkan</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                ');
            redirect('dashboard/rekanan');
    }

    public function penjualan($page=null)
    {
    	if(empty($page)){
			$data['halaman']=1;
			$offset = $data['halaman']-1;
		}else
		{
			$data['halaman']=$page;
			$offset = $page-1;
		}
		$data['penjualan'] = $this->penjualan_model->getPenjualan($page);
		$data['jumlahpenjualan'] = count($this->penjualan_model->getAllPenjualan());
		$this->load->view('penjualan',$data);
    }

    public function tambah_penjualan(){
    	$data['id'] = $this->penjualan_model->getIdLastPenjualan();
    	$data['noreg'] = $this->penjualan_model->getNoregLastPenjualan();
    	$data['tertanggung'] = $this->penjualan_model->getAllTertanggung();
    	$data['marketing'] = $this->penjualan_model->getAllMarketing();
    	$this->load->view('tambah_penjualan',$data);
    }

    public function cekKartu($jumlah,$start){
    	$kartufix = $start-1;
    	$validasi = $this->kartu_model->cekKartuPemasar($jumlah,$kartufix);
    	if(count($validasi)!=$jumlah){
    		$data['status']='false';
    	}else{
    		$data['status']='true';
    	}
		echo json_encode($data);
    }

    public function act_penjualan_tambah(){
    	$data['id'] = $this->input->post('kode');
    	$data['kode_tertanggung'] = $this->input->post('kodetertanggung');
    	$data['nama_tertanggung'] = $this->input->post("namatertanggung");
    	$data['kode_marketing'] = $this->input->post('kodemarketing');
    	$data['nama_marketing'] = $this->input->post('namamarketing');
    	$data['noreg_awal'] = $this->input->post('noregawal');
    	$data['noreg_akhir'] = $this->input->post('noregakhir');
    	$data['tgl_penjualan'] = $this->input->post('tglpenjualan');
    	//print_r($data);
    	$this->penjualan_model->insertPenjualan($data);
    	$this->kartu_model->updateStockTertanggung($data['noreg_awal'],$data['noreg_akhir']);
    	redirect('dashboard/penjualan');
    }

    public function cekRekananById($id){
    	$data = $this->penjualan_model->searchRekananById($id);
		echo json_encode($data);
    }

    public function stock_kartu(){
    	$data['jumlahstock'] = count($this->kartu_model->getAllKartuPemasar());
    	$data['jumlahpenjualan'] = 0;
    	$data['penjualan'] = $this->penjualan_model->getAllPenjualan();
    	foreach ($data['penjualan'] as $jumlah) {
    		$data['jumlahpenjualan'] += $jumlah->noreg_akhir - $jumlah->noreg_awal + 1;
    	}
    	$this->load->view('stock_kartu',$data);
    }

    public function request($page=null){
    	if(empty($page)){
			$data['halaman']=1;
			$offset = $data['halaman']-1;
		}else
		{
			$data['halaman']=$page;
			$offset = $page-1;
		}
		$data['request']=$this->kartu_model->getRequestPemasar($offset);
    	$this->load->view('request_kartu',$data);
    }

    public function request_kartu(){
    	$data['id'] = $this->kartu_model->getIdLastRequest();
    	$this->load->view('tambah_request',$data);
    }

    public function act_request_tambah(){
    	$data['id'] = $this->input->post('kode');
    	$data['tanggal_transaksi'] = date('Y-m-d');
    	$data['sumber'] = "AKDA EXTRA";
    	$data['tujuan'] = "LOGISTIK";
    	$data['status'] = "MEMINTA";
    	$data['jumlah_kartu'] = $this->input->post('jumlahkartu');
    	//print_r($data);
    	$this->kartu_model->insertRequestPemasar($data);
		$this->session->set_flashdata('msg','
                <section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Request Kartu Berhasil</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
                ');
            redirect('dashboard/request');
    }

    public function penerimaan_kartu($page=null)
    {
    	if(empty($page)){
			$data['halaman']=1;
			$offset = $data['halaman']-1;
		}else
		{
			$data['halaman']=$page;
			$offset = $page-1;
		}
		$data['request']=$this->kartu_model->getRequestPemasarApproved($offset);
    	$this->load->view('penerimaan_kartu',$data);
    }

    public function stock_kartu_logistik(){
    	$data['jumlahstock'] = count($this->kartu_model->getAllKartuLogistik());
    	$data['jumlahpengiriman'] = 0;
    	$data['pengiriman'] = $this->penjualan_model->getAllPengiriman();
    	foreach ($data['pengiriman'] as $jumlah) {
    		$data['jumlahpengiriman'] += $jumlah->noreg_akhir - $jumlah->noreg_awal + 1;
    	}
    	$this->load->view('stock_kartu_logistik',$data);
    }

	public function info_peserta($id){
		$data['peserta'] = $this->peserta_model->getPesertaById($id);
		$this->load->view('infopeserta',$data);
	}
	public function getPesertaById($id){
		$data = $this->peserta_model->getPesertaById($id);
		echo json_encode($data);
	}

	public function user(){
		$data['users'] = $this->users_model->getAllUsers();
		for ($i=0; $i < count($data['users']); $i++) { 
			$temp = $this->users_model->getPosisiById($data['users'][$i]->kode_posisi);
			$data['users'][$i]->posisi = $temp[0]->posisi;
		}
		$data['posisi'] = $this->users_model->getAllPosisi();
		$this->load->view('user',$data);
	}

	public function posisi(){
		$data['posisi'] = $this->users_model->getAllPosisi();
		for ($i=0; $i < count($data['posisi']); $i++) { 
			$temp = $this->users_model->getRoleById($data['posisi'][$i]->kode_role);
			$data['posisi'][$i]->role = $temp[0]->role_name;
		}
		$data['role'] = $this->users_model->getAllRole();
		$this->load->view('posisi',$data);
	}

	public function act_posisi_tambah(){
		$data['posisi'] = $this->input->post('posisi');
		$data['kode_role'] = $this->input->post('role');
		$this->users_model->postPosisi($data,'users.posisi');
		redirect('dashboard/posisi');
	}

	public function role(){
		$data['role'] = $this->users_model->getAllRole();
		$this->load->view('role',$data);
	}

	public function act_role_tambah(){
		$data['role_name'] = $this->input->post('role');
		$this->users_model->postRole($data,'users.role');
		redirect('dashboard/role');
	}

	public function searchEmailUsers($email){
		$emailfix = str_replace("%20","@",$email);
		$data = $this->users_model->getUsersByEmail($emailfix);
		echo json_encode($data);
	}
	public function searchPesertaByNoreg($noreg){
		$data = $this->peserta_model->searchNoRegAktif($noreg);
		echo json_encode($data);
	}

	public function act_registrasi_klaim(){
		//$data['kd_thn'] = date('y');
		$data['noreg'] = $this->input->post('noreg');
		$data['nopin'] = $this->input->post('nopin');
		$data['nama_peserta'] = $this->input->post('nama');
		$data['alamat_peserta'] = $this->input->post('alamat');
		$data['tgl_reg'] = $this->input->post('tgl_registrasi');
		$data['tgl_kej'] = $this->input->post('tglkejadian');
		//$data['kd_sebab'] = "1";
		$data['no_sebab'] = $this->input->post('penyebab_klaim');
		$data['ket_klaim'] = $this->input->post('keterangan_klaim');
		$data['lokasi_kej'] = $this->input->post('lokasi_kejadian');
		$data['pelapor'] = $this->input->post('pelapor');
		$data['tgl_lapor'] = $this->input->post('tgllapor');
		//$data['kd_approval'] = "2";
		//$data['kd_status'] = "1";
		//$data['tgl_user_input'] = date('d M Y');
		//$data['flag_closing'] = "false";
		$data['kd_cb'] = $this->session->userdata('kd_cb');
		$data['kd_user_input'] = $this->session->userdata('kd_user');
		$data['no_updt'] = '0';
		$data['temp'] = null;
		//print_r($data);
		//$this->klaim_model->klaimDaftar('klaim.tklaim',$data);
		$temp = $this->klaim_model->klaimCallProc("CALL klaim.postnewklaim(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",$data);
		//$temp = $this->klaim_model->getTKlaimByNoreg($data['noreg']);
		$id = $temp[0]->penampung_no_kl;
		$this->session->set_flashdata('msg','
				<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Data Berhasil DIsimpan</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
				
				');
		redirect('dashboard/klaim_register/'.$data['kd_cb'].'/'.date('y').'/'.$id.'/klaim');
	}

	public function act_update_klaim($id){
		$data['tgl_kej'] = $this->input->post('tglkejadian');
		$data['tgl_lapor'] = $this->input->post('tgllapor');
		$data['no_sebab'] = $this->input->post('penyebab_klaim');
		$data['ket_klaim'] = $this->input->post('keterangan_klaim');
		$data['lokasi_kej'] = $this->input->post('lokasi_kejadian');
		$data['pelapor'] = $this->input->post('pelapor');
		$data['kd_user_update'] = $this->session->userdata('kd_user');
		$data['tgl_user_update'] = date('d M Y');
		$this->klaim_model->updateKlaimById($data,$id);
		$this->session->set_flashdata('msg','
				<section class ="" style="padding-top: 25px;">
                    <div class="container">
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
	                        <span class="content">Data Berhasil Disimpan</span>
	                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">
	                                <i class="zmdi zmdi-close-circle"></i>
	                            </span>
	                        </button>
	                    </div>
                    </div>
                </section>
				
				');
		redirect('dashboard/klaim_register/'.$id.'/klaim');
	}

	public function act_registrasi_nilai_klaim($kd_cb,$kd_thn,$id){
		//$getdata = $this->klaim_model->getTKlaimById($id);
		$data['kd_cb'] = $kd_cb;
		$data['kd_thn'] = $kd_thn;
		$data['no_kl'] = $id;
		//$data['kd_jenis_pertanggungan'] = "2";
		$data['no_jenis_pertanggungan'] = $this->input->post('jenis_klaim');
		$data['nilai_klaim'] = $this->input->post('nilai_klaim_utama');
		$data['temp'] = null;
		/*$validasi = $this->klaim_model->getDetailJenisPertanggunganByIdAndSebab($data['no_kl'],$data['no_jenis_pertanggungan']);
		$validasisaldo = $this->klaim_model->getRiwayatKlaimByIdAndSebab($getdata[0]->noreg,$data['no_jenis_pertanggungan']);
		$getvalue = $this->klaim_model->getDetailLookUpDetailByKdAndId(2,$data['no_jenis_pertanggungan']);
		$validasiupdate = $this->klaim_model->getDetailJenisPertanggunganById($id);
		//cek apakah ini update atau baru
		if(!empty($validasiupdate)){
			$update['kd_user_update'] = $this->session->userdata('kd_user');
			$update['tgl_user_update'] = date('d M Y');
			$this->klaim_model->updateKlaimById($update,$id);
		}

		if(empty($validasisaldo)){
			$batas = $getvalue[0]->value;
		}else{
			$batas = $validasisaldo[0]->saldo_klaim;
		}

		if(empty($validasi)){
			if($data['nilai_klaim']>$batas){
				$statusklaim = "gagal";
			}else{
				$this->klaim_model->klaimDaftar("klaim.tklaimdetailjenispertanggungan",$data);
				$statusklaim = "berhasil";
			}
		}else{
			$data['nilai_klaim'] = $data['nilai_klaim']+$validasi[0]->nilai_klaim;
			if($data['nilai_klaim']>$batas){
				$statusklaim = "gagal";
			}else{
				$this->klaim_model->updateDetailJenisPertanggungan($data,$validasi[0]->no_urut);
				$statusklaim = "berhasil";
			}
		}*/
		$statusklaim = $this->klaim_model->klaimCallProc("CALL klaim.postnilaiklaim(?,?,?,?,?,?)",$data);
		print_r($statusklaim);

		if($statusklaim[0]->response=="Berhasil")
		{
			$this->session->set_flashdata('msg','
					<section class ="" style="padding-top: 25px;">
						<div class="container">
							<div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
								<span class="content">Data Berhasil Disimpan</span>
								<button class="close" type="button" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">
										<i class="zmdi zmdi-close-circle"></i>
									</span>
								</button>
							</div>
						</div>
					</section>
					
					');
		}else{
			$this->session->set_flashdata('msg','
					<section class ="" style="padding-top: 25px;">
						<div class="container">
							<div class="alert alert-danger" role="alert">
								<span class="content">Nilai Klaim Melebihi Limit</span>
								<button class="close" type="button" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">
										<i class="zmdi zmdi-close-circle"></i>
									</span>
								</button>
							</div>
						</div>
					</section>
					
					');
		}
		redirect('dashboard/klaim_register/'.$kd_cb.'/'.$kd_thn.'/'.$id.'/klaim');
	}

	public function getPlafondKlaimById($kd_cb,$kd_thn,$id){
		$data = $this->klaim_model->getAllLookUpDetail(2);
		//$temp = $this->klaim_model->getTKlaimById($id);
		$temp = $this->klaim_model->getTklaimByPrimary($kd_cb,$kd_thn,$id);
		$noreg = $temp[0]->noreg;
		$no_updt = $temp[0]->no_updt;
		foreach($data as $klaim){
			$riwayat = $this->klaim_model->getRiwayatKlaimByIdAndSebab($noreg,$klaim->no_lookup,$no_updt);
			if(empty($riwayat)){
				$klaim->riwayat = "-";
				$klaim->saldo = $klaim->value;
			}else{
				$klaim->riwayat = $riwayat[0]->mutasi_klaim;
				$klaim->saldo = $riwayat[0]->saldo_klaim;
			}
		}
		echo json_encode($data);
	}

	public function getDetailKlaimByPrimary($kd_cb,$kd_thn,$id){
		$data = $this->klaim_model->getDetailJenisPertanggunganByPrimary($kd_cb,$kd_thn,$id);
		foreach($data as $klaim){
			$nama_jenis = $this->klaim_model->getDetailLookUpDetailByKdAndId(2,$klaim->no_jenis_pertanggungan);
			$klaim->jenis_pertanggungan = $nama_jenis[0]->nm_detail_lookup;
		}
		echo json_encode($data);
	}

	public function getFormDokumenKlaim($kd_cb,$kd_thn,$id){
		$data = $this->klaim_model->getAllLookUpDetail(3);
		foreach($data as $klaim){
			$temp = $this->klaim_model->getKlaimDocumentByPrimaryAndNoDokumen($kd_cb,$kd_thn,$id,$klaim->no_lookup);
			if(!empty($temp)){
				$klaim->status = $temp[0]->status;
			}else{
				$klaim->status = 'null';
			}

			if(!empty($temp[0]->dokumen)){
				$klaim->lokasi = $temp[0]->dokumen;
			}else{
				$klaim->lokasi = 'null';
			}
		}
		echo json_encode($data);
	}

	public function act_registrasi_dokumen_klaim($kd_cb,$kd_thn,$id){
		//CONFIG UNTUK UPLOAD
		$config['upload_path'] = './upload/berkas_klaim';
		$config['allowed_types'] = 'jpg|png|doc|docx|xls|xlsx|pdf';
		$config['encrypt_name'] = true;
		$this->load->library('upload',$config);

		$count=0;
		$data['kd_cb'] = $kd_cb;
		$data['kd_thn'] = $kd_thn;
		$data['no_kl'] = $id;
		$data['analisa_klaim'] = $this->input->post('analisa_klaim');
		//$data['dokumen'] = $this->input->post('value');
		$tmpdokumen = $this->input->post('value');
		foreach($tmpdokumen as $klaim){
			if(!empty($_FILES['file']['name'][$klaim-1])){
				$_FILES['upload']['name'] = $_FILES['file']['name'][$klaim-1];
				$_FILES['upload']['type'] = $_FILES['file']['type'][$klaim-1];
				$_FILES['upload']['tmp_name'] = $_FILES['file']['tmp_name'][$klaim-1];
				$_FILES['upload']['error'] = $_FILES['file']['error'][$klaim-1];
				$_FILES['upload']['size'] = $_FILES['file']['size'][$klaim-1];
				if($this->upload->do_upload('upload')){
					
					$upload = $this->upload->data();
					$tmplokasi[$count] = $upload['file_name'];
				}else{
					$tmplokasi[$count] = null;
				}
			}else{
				$tmplokasi[$count] = null;
			}
			$count++;
		}
		
		for($i=0;$i<count($tmpdokumen);$i++){
			if($i==0){
				$data['dokumen'] = $tmpdokumen[$i];
				$data['lokasi'] = $tmplokasi[$i];
			}else{
				$data['dokumen'] .= $tmpdokumen[$i];
				$data['lokasi'] .= $tmplokasi[$i];
			}

			if($i!=(count($tmpdokumen))-1){
				$data['dokumen'] .=',';
				$data['lokasi'] .=',';
			}
		}
		print_r($data);
		$this->klaim_model->klaimCallProc("CALL klaim.testlooping(?::character varying,?::character varying,?::character varying,?::text,?::character varying,?::character varying)",$data);
		

		//GET DATA FROM NO_KL
		/*$temp = $this->klaim_model->getTKlaimById($id);

		//GIFT DATA TO UPLOAD TO DATABASE FROM TKLAIM
		$data['kd_cb'] = $temp[0]->kd_cb;
		$data['kd_thn'] = $temp[0]->kd_thn;
		$data['no_kl'] = $id;
		$data['kd_dokumen'] = "3";
		$data['status'] = "true";
		$update['analisa_klaim'] = $this->input->post('analisa_klaim');

		//UPDATE TKLAIM UNTUK ANALISIS KLAIM
		$this->klaim_model->updateKlaimById($update,$id);

		$value = $this->input->post('value');
		$jumlah_berkas = count($_FILES['file']['name']);
		$statusupdate = $this->klaim_model->getKlaimDocumentById($id);
		//print_r($value);
		if(empty($statusupdate)){
			for($i = 0; $i<$jumlah_berkas;$i++){
				if(empty($_FILES['file']['name'][$i])){
					if(empty($value)){
	
					}else
					{
						foreach($value as $nilai){
							if($i+1==$nilai){
								//$data['no_dokumen']
								$data['no_dokumen'] = $nilai;
								$this->klaim_model->klaimDaftar('klaim.tklaimdetaildokumen',$data);
							}
						}
					}
				}else{
					$_FILES['upload']['name'] = $_FILES['file']['name'][$i];
					$_FILES['upload']['type'] = $_FILES['file']['type'][$i];
					$_FILES['upload']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
					$_FILES['upload']['error'] = $_FILES['file']['error'][$i];
					$_FILES['upload']['size'] = $_FILES['file']['size'][$i];
					if($this->upload->do_upload('upload')){
						$upload = $this->upload->data();
						$data['no_dokumen'] = $i+1;
						$data['dokumen'] = $upload['file_name'];
						$this->klaim_model->klaimDaftar('klaim.tklaimdetaildokumen',$data);
					}
				}
			}
		}else{
			$update['kd_user_update'] = $this->session->userdata('kd_user');
			$update['tgl_user_update'] = date('d M Y');
			$this->klaim_model->updateKlaimById($update,$id);
			for($i = 0; $i<$jumlah_berkas;$i++){
				$validasi = $this->klaim_model->getKlaimDocumentByIdAndNoDokumen($id,$i+1);
				//Kondisi jika sudah ada record, harus update dokumen
				if(!empty($validasi)){
                    //Cek jika value dari database tidak ada di input, maka harus di delete
                    if(!in_array($validasi[0]->no_dokumen, $value)){
                        echo "Data dihapus pada".$validasi[0]->no_dokumen;
                        //print_r($value);
                        $this->klaim_model->deleteDokumenKlaim($validasi[0]->no_urut);
                    }else
                    if(!empty($_FILES['file']['name'][$i])){
                            $data['status']  = "true";
        					$_FILES['upload']['name'] = $_FILES['file']['name'][$i];
        					$_FILES['upload']['type'] = $_FILES['file']['type'][$i];
        					$_FILES['upload']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
    						$_FILES['upload']['error'] = $_FILES['file']['error'][$i];
    						$_FILES['upload']['size'] = $_FILES['file']['size'][$i];

        				if($this->upload->do_upload('upload')){
        					$upload = $this->upload->data();
        					$data['dokumen'] = $upload['file_name'];
                            $this->klaim_model->klaimDokumenUpdate($data,$validasi[0]->no_urut);
                        }
					}
				}else
                if(in_array($i+1, $value)) {
                    $data['status']  = "true";
                    $data['no_dokumen'] = $i+1;
                    if(!empty($_FILES['file']['name'][$i])){
                        $_FILES['upload']['name'] = $_FILES['file']['name'][$i];
                        $_FILES['upload']['type'] = $_FILES['file']['type'][$i];
                        $_FILES['upload']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
                        $_FILES['upload']['error'] = $_FILES['file']['error'][$i];
                        $_FILES['upload']['size'] = $_FILES['file']['size'][$i];
                        if($this->upload->do_upload('upload')){
                            $upload = $this->upload->data();
                            $data['dokumen'] = $upload['file_name'];
                            }
                        }
                    $this->klaim_model->klaimDaftar('klaim.tklaimdetaildokumen',$data);
                }
			}
		}*/
		$this->session->set_flashdata('msg','
						<section class ="" style="padding-top: 25px;">
							<div class="container">
								<div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
									<span class="content">Data Berhasil Disimpan</span>
									<button class="close" type="button" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">
											<i class="zmdi zmdi-close-circle"></i>
										</span>
									</button>
								</div>
							</div>
						</section>
						
						');
		redirect('dashboard/klaim_register/'.$kd_cb.'/'.$kd_thn.'/'.$id.'/dokumen');
	}

	public function getJenisKlaimTaken($id){
		$penampung = $this->klaim_model->getJenisKlaimTaken($id);
		$i=0;
		foreach($penampung as $jenisklaim){
			$penampungklaim[$i] = $jenisklaim->no_jenis_pertanggungan;
			$i++;
		}
		//print_r($penampungklaim);
		$dokumenrequired = [];
		foreach($penampungklaim as $dokumenklaim){
			$penampungdokumen = $this->klaim_model->getDokumenRequired($dokumenklaim);
			foreach($penampungdokumen as $penampungdokumen){
				if(!in_array($penampungdokumen->no_dokumen,$dokumenrequired)){
					$dokumenrequired[] = $penampungdokumen->no_dokumen;
				}
			}
		}
		//print_r($dokumenrequired);
		echo json_encode($dokumenrequired);
	}

	public function act_proses_klaim(){
		//$klaim = $this->klaim_model->getTKlaimById($this->input->post('no_kl'));
		//$validasijabatan = $this->klaim_model->getValidasiJabatan(1);
		//$jabatan = $this->klaim_model->getUserByJabatan($validasijabatan[0]->kd_jabatan);
		$data['kd_cb'] = $this->input->post('kd_cb');
		$data['kd_thn'] = $this->input->post('kd_thn');
		$data['no_kl'] = $this->input->post('no_kl');
		//$data['kd_user'] = $klaim[0]->kd_user_input;
		//$data['tgl_status'] = date('d M Y');
		//$data['kd_status'] = 2;
		//$data['kd_user_status'] = $jabatan[0]->id;
		$data['keterangan'] = $this->input->post('keterangan');
		//$data['kd_approval'] = 1;
		//$this->klaim_model->updateToProsesKlaim($data);
		$this->klaim_model->klaimCallProc("CALL klaim.testprocessklaim(?,?,?,?)",$data);

		redirect('dashboard/klaim');
	}

	public function settlement_klaim(){
		$data['dataklaim'] = $this->klaim_model->getKlaimProcess();
		foreach ($data['dataklaim'] as $klaim) {
			$getstatus = $this->klaim_model->getNamaStatus($klaim->kd_status);
			$klaim->nama_status = $getstatus[0]->nm_status;
		}
		$this->load->view('settlement_klaim',$data);
	}

	public function view_klaim($kd_cb,$kd_thn,$no_kl){
		//Memanggil library
		$this->load->library('pdfgenerator');

		//filename pdf ketika di download
		$file_pdf = 'E - Polis Peserta Akda Extra';

		//Ukuran kertas
		$paper = 'A4';

		//Orientasi Paper
		$orientation = "potrait";
		
		//Pengambilan data dari database
		$data['info'] = $this->klaim_model->getTKlaimByPrimary($kd_cb,$kd_thn,$no_kl);
		$data['jenisklaim'] = $this->klaim_model->getDetailJenisKlaimByPrimary($kd_cb,$kd_thn,$no_kl);
		$data['dokumenklaim'] = $this->klaim_model->getLookUpDetail(3);
		
		foreach ($data['info'] as $info){
			$getPenyebabKlaim = $this->klaim_model->getDetailLookUpDetailByKdAndId(1,$info->no_sebab);
			$info->penyebab_klaim = $getPenyebabKlaim[0]->nm_detail_lookup;
		}
		
		foreach($data['jenisklaim'] as $jenisklaim){
			$getPenyebabKlaim = $this->klaim_model->getDetailLookUpDetailByKdAndId(2,$jenisklaim->no_jenis_pertanggungan);
			$jenisklaim->nama_jenis = $getPenyebabKlaim[0]->nm_detail_lookup;
		}

		foreach($data['dokumenklaim'] as $dokumenklaim){
			$getDokumenTaken = $this->klaim_model->getKlaimDocumentByPrimaryAndNoDokumen($kd_cb,$kd_thn,$no_kl,$dokumenklaim->no_lookup);
			if(empty($getDokumenTaken)){
				$dokumenklaim->status = null;
			}else{
				$dokumenklaim->status = "v";
			}
		}

		//Memanggil html untuk dijadikan PDF
		$html = $this->load->view('cetakpenyelesaianklaim',$data,true);

		//run dompdf
		$this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
		//$this->load->view('cetakpenyelesaianklaim',$data);
	}
	
	public function act_approval_klaim(){
		$data['kd_cb'] = $this->input->post('kd_cb');
		$data['kd_thn'] = $this->input->post('kd_thn');
		$data['no_kl'] = $this->input->post('no_kl');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['kd_user'] = $this->input->post('kd_user');
		$this->klaim_model->klaimCallProc("call klaim.testapprovalklaim(?,?,?,?,?)",$data);
		redirect('dashboard/settlement_klaim');
	}

	public function kredit_nota(){
		$data['dataklaim'] = $this->klaim_model->getAllApprovedKlaim();
		foreach ($data['dataklaim'] as $klaim) {
			$getstatus = $this->klaim_model->getNamaStatus($klaim->kd_status);
			$klaim->nama_status = $getstatus[0]->nm_status;
			$getnilaint = $this->klaim_model->getNotaByPrimary($klaim->kd_cb,$klaim->kd_thn,$klaim->no_kl);
			$klaim->nilai_nt = $getnilaint[0]->nilai_nt;
			$klaim->kd_thn_nt = $getnilaint[0]->kd_thn_nt;
			$klaim->no_nt = $getnilaint[0]->no_nt;
		}
		$this->load->view('kredit_nota',$data);
	}
	
	public function cetak_nota($kd_cb,$kd_thn,$no_kl){
		//Memanggil library
		$this->load->library('pdfgenerator');

		//filename pdf ketika di download
		$file_pdf = 'E - Polis Peserta Akda Extra';

		//Ukuran kertas
		$paper = 'A4';

		//Orientasi Paper
		$orientation = "potrait";
		
		//Pengambilan dan Pengelolahan Data
		$data['info'] = $this->klaim_model->getTKlaimByPrimary($kd_cb,$kd_thn,$no_kl);
		$data['nota'] = $this->klaim_model->getNotaByPrimary($kd_cb,$kd_thn,$no_kl);
		$data['jenisklaim'] = $this->klaim_model->getDetailJenisKlaimByPrimary($kd_cb,$kd_thn,$no_kl);

		foreach($data['jenisklaim'] as $jenisklaim){
			$getPenyebabKlaim = $this->klaim_model->getDetailLookUpDetailByKdAndId(2,$jenisklaim->no_jenis_pertanggungan);
			$jenisklaim->nama_jenis = $getPenyebabKlaim[0]->nm_detail_lookup;
		}
		
		//Memanggil html untuk dijadikan PDF
		$html = $this->load->view('cetaknotaklaim',$data,true);

		//run dompdf
		$this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
		
		//$this->load->view('cetaknotaklaim',$data);
	}

	public function memo_penyelesaian_klaim(){
		$data['dataklaim'] = $this->klaim_model->getAllKlaimMemo();
		foreach ($data['dataklaim'] as $klaim) {
			$getstatus = $this->klaim_model->getNamaStatus($klaim->kd_status);
			$klaim->nama_status = $getstatus[0]->nm_status;
		}
		$this->load->view('memo_penyelesaian',$data);
	}
}