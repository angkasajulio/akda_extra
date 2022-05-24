<!DOCTYPE html>
<html lang="en">
	<h2>Klaim</h2>
	<table border="1" cellpadding="4">
		<thead>
			<tr>
				<td>NAMA</td>
				<td>NOMOR REGISTER</td>
				<td>JENIS KLAIM</td>
				<td>TANGGAL KLAIM</td>
				<td>NILAI KLAIM</td>
				<td>STATUS</td>
				<td>AKSI</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataklaim as $klaim) {
                echo "<tr>";
                    echo "<td>".$klaim->nama."</td>";
                    echo "<td>".$klaim->noreg."</td>";
                    echo "<td>".$klaim->jenis_klaim."</td>";
                    echo "<td>".$klaim->tgl_klaim."</td>";
                    echo "<td>".$klaim->nilai_klaim."</td>";
                    echo "<td>".$klaim->status."</td>";
                    echo "
                    	<td>
	                    	<button>
								<a href=klaim_edit/".$klaim->id.">Edit</a>
							</button>
	                    	<br>
	                    	<button>
								<a href=".base_url('dashboard/klaim').">Delete</a>
							</button>
	                    	<br>
	                    	<button>
								<a href=".base_url('dashboard/klaim').">Info</a>
							</button>
	                    	<br>
	                    </td>
                    ";
                echo "</tr>";
                }
            ?> 
		</tbody>
	</table>	
	<div id="notifications"><?php echo $this->session->flashdata('pesan'); ?></div>  
</html>