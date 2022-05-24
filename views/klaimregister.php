<!DOCTYPE html>
<html lang="en">
	<h2>Register Klaim</h2>
	<form method="POST" action="<?php echo base_url('dashboard/act_klaim_daftar')?>">
		<table>
			<!--<tr>
				<td>NO. Register</td>
				<td><input type="number" name="noreg" placeholder="Nomor Register"></td>
			</tr>-->
			<tr>
				<td>Nama Peserta</td>
				<td><input type="text" name="nama" placeholder="Nama Peserta"></td>
			</tr>
			<tr>
				<td>NO.Register Kartu</td>
				<td><input type="number" name="noreg" placeholder="Nomor Register Kartu"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" placeholder="Alamat"></textarea></td>
			</tr>
			<tr>
				<td>Klaim</td>
				<td>
					<select name="jenisklaim" placeholder="Jenis Klaim">
						<option value='Biaya Pengobatan'>Biaya Pengobatan</option>
						<option value='Cacat Tetap'>Cacat Tetap</option>
						<option value='Meninggal Dunia'>Meninggal Dunia</option>
					</select>
				</td>
			</tr>			
			<tr>
				<td>Tanggal Klaim</td>
				<td><input type="date" name="tanggalklaim" placeholder="Tanggal Klaim"></td>
			</tr>
			<tr>
				<td>Penyebab Klaim</td>
				<td><input type="text" name="penyebabklaim" placeholder="Penyebab Klaim"></td>
			</tr>
			<tr>
				<td>Nilai Klaim (Rp)</td>
				<td><input type="number" name="nilaiklaim" placeholder="Nilai klaim (Rp)"></td>
			</tr>
		</table>
		<h2>Kelengkapan Dokumen</h2>
		<table>
			<tr>
				<td>Formulir Klaim</td>
				<td>
					<input type="radio" name="formulir_klaim" value="TRUE">Ada<br>
					<input type="radio" name="formulir_klaim" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Kartu Asli AKDA EXTRA</td>
				<td>
					<input type="radio" name="kartu_akda_extra" value="TRUE">Ada<br>
					<input type="radio" name="kartu_akda_extra" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Surat Keterangan Kecelakaan Lalu Lintas dari Kepolisian</td>
				<td>
					<input type="radio" name="surat_keterangan_kecelakaan" value="TRUE">Ada<br>
					<input type="radio" name="surat_keterangan_kecelakaan" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Foto Copy KTP Tertanggung</td>
				<td>
					<input type="radio" name="ktp_tertanggung" value="TRUE">Ada<br>
					<input type="radio" name="ktp_tertanggung" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Foto Copy KTP Ahli Waris</td>
				<td>
					<input type="radio" name="ktp_ahli_waris" value="TRUE">Ada<br>
					<input type="radio" name="ktp_ahli_waris" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Kwitansi Pengobatan</td>
				<td>
					<input type="radio" name="kwitansi" value="TRUE">Ada<br>
					<input type="radio" name="kwitansi" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Surat Keterangan Cacat</td>
				<td>
					<input type="radio" name="surat_keterangan_cacat" value="TRUE">Ada<br>
					<input type="radio" name="surat_keterangan_cacat" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Surat Keterangan Kematian</td>
				<td>
					<input type="radio" name="surat_keterangan_kematian" value="TRUE">Ada<br>
					<input type="radio" name="surat_keterangan_kematian" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td>Surat Keterangan Ahli Waris</td>
				<td>
					<input type="radio" name="surat_keterangan_ahli_waris" value="TRUE">Ada<br>
					<input type="radio" name="surat_keterangan_ahli_waris" value="FALSE">Tidak ada
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="tombol" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<div id="notifications"><?php echo $this->session->flashdata('pesan'); ?></div>  
</html>