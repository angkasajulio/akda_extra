<!DOCTYPE html>
<html lang="en">
	<table cellpadding="10">
		<tr>
			<td align="center"><a class="ghost" onclick="on('aktif')">Peserta Aktif <br>
				<h2><?php echo $jumlahpeserta ?></h2></a>
			</td>
			<td align="center"><a class="ghost" onclick="on('aktivasi')">Peserta Aktif Per-Bulan Ini<br>
				<h2><?php echo $jumlahpesertasebulan ?></h2></a>
			</td>
			<td align="center"><a class="ghost" onclick="on('expired')">Peserta Yang Akan Expired 1 Bulan Kedepan<br>
				<h2><?php echo $jumlahexpiredsebulan ?></h2></a>
			</td>
		</tr>
	</table>
	<span id='aktif' style="display: inline;">
		<h2>Peserta Aktif</h2>
		<table border="1" cellpadding="4">
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
				<?php foreach ($pesertaaktif as $peserta) {
	                echo "<tr>";
	                    echo "<td>".$peserta->noreg."</td>";
	                    echo "<td>".$peserta->nopin."</td>";
	                    echo "<td>".$peserta->nama."</td>";
	                    echo "<td>".$peserta->tgl_reg."</td>";
	                    echo "<td>".$peserta->tgl_aktif."</td>";
	                    echo "<td>".$peserta->tgl_expired."</td>";
	                echo "</tr>";
	                }
	            ?> 
			</tbody>
		</table>
		<button>
			<a class="btn btn-info" role="button" href=<?php echo base_url('dashboard/cetak')?> >Cetak</a>
		</button>
			
	</span>
	<span id='aktivasi' style="display: none;">
		<h2>Peserta Yang Melakukan Aktivasi Bulan Ini</h2>
		<table border="1" cellpadding="4">
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
				<?php foreach ($pesertabulan as $peserta) {
	                echo "<tr>";
	                    echo "<td>".$peserta->noreg."</td>";
	                    echo "<td>".$peserta->nopin."</td>";
	                    echo "<td>".$peserta->nama."</td>";
	                    echo "<td>".$peserta->tgl_reg."</td>";
	                    echo "<td>".$peserta->tgl_aktif."</td>";
	                    echo "<td>".$peserta->tgl_expired."</td>";
	                echo "</tr>";
	                }
	            ?> 
			</tbody>
		</table>
	</span>
	<span id='expired' style="display: none;">
		<h2>Peserta Yang Akan Expired 1 Bulan Kedepan</h2>
		<table border="1" cellpadding="4">
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
				<?php foreach ($expiredbulan as $peserta) {
	                echo "<tr>";
	                    echo "<td>".$peserta->noreg."</td>";
	                    echo "<td>".$peserta->nopin."</td>";
	                    echo "<td>".$peserta->nama."</td>";
	                    echo "<td>".$peserta->tgl_reg."</td>";
	                    echo "<td>".$peserta->tgl_aktif."</td>";
	                    echo "<td>".$peserta->tgl_expired."</td>";
	                echo "</tr>";
	                }
	            ?> 
			</tbody>
		</table>
	</span>
</html>
<script>
	var status = '<?php echo $this->session->flashdata('status')?>';
	var url = '<?php echo $this->session->flashdata('url')?>';
	if(status!=''){
		window.location.replace(url);
	}
	function on(id) {
		document.getElementById("aktif").style.display = "none";
		document.getElementById("aktivasi").style.display = "none";
		document.getElementById("expired").style.display = "none";
		document.getElementById(id).style.display = "inline";
	}
	
</script>
<style type="text/css">
   .ghost{
      /* posisi di tengah */
       display:inline-block;
       text-decoration:none;
	   text-transform:uppercase;
	   color: black;
   }
   
</style>