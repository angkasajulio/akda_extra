<!DOCTYPE html>
<html lang="en">
	<h2>Daftar Peserta</h2>
	<form method="POST" action="<?php echo base_url('dashboard/act_peserta_daftar')?>">
		<table>
			<!--<tr>
				<td>NO. Register</td>
				<td><input type="number" name="noreg" placeholder="Nomor Register"></td>
			</tr>-->
			<tr>
				<td>NO. PIN</td>
				<td><input type="number" name="nopin" placeholder="Nomor PIN"></td>
			</tr>
			<tr>
				<td>NO. Identitas</td>
				<td><input type="number" name="nonik" placeholder="KTP/SIM/KARTU PELAJAR/PASPOR/NRP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" placeholder="Nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" placeholder="Alamat"></textarea></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggallahir" placeholder="Tanggal Lahir"></td>
			</tr>
			<tr>
				<td>NO. Telpon</td>
				<td><input type="number" name="notelp" placeholder="Nomor Telpon"></td>
			</tr>
			<tr>
				<td>Tanggal Register</td>
				<td><input type="date" name="tglregister" placeholder="Tanggal Register"></td>
			</tr>
			<tr>
				<td>Tanggal Aktif</td>
				<td><input type="date" name="tglaktif" placeholder="Tanggal Aktif"></td>
			</tr>
			<tr>
				<td>Tanggal Expired</td>
				<td><input type="date" name="tglexpired" placeholder="Tanggal Expired"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tombol" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<div id="notifications"><?php echo $this->session->flashdata('pesan'); ?></div>  
</html>