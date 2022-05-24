<html>
<h1>Selamat datang, <?php echo $this->session->userdata('username');?></h1>
	<br>
	<br>
	<button>
		<a href=<?php echo base_url('dashboard')?>>Dashboard</a>
	</button>
	<button>
		<a href=<?php echo base_url('dashboard/peserta_aktif')?>>Peserta</a>
	</button>
	<button>
		<a href=<?php echo base_url('dashboard/klaim')?>>Klaim</a>
	</button>
	<button>
		<a href='#'>Laporan</a>
	</button>
	<button>
		<a href='#'>Penulisan Nota</a>
	</button>
	<button>
		<a href=<?php echo base_url('login')?>>Logout</a>
	</button>
</html>