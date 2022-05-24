<!DOCTYPE html>
<html lang="en">
	<h2>Peserta Yang Akan Expired 1 Minggu Kemudian</h2>
	<table border="1" cellpadding="4">
		<thead>
			<tr>
				<td>NO. REG</td>
				<td>NO. PIN</td>
				<td>NAMA</td>
				<td>TGL. REGISTER</td>
				<td>TGL. AKTIF</td>
				<td>TGL. BERAKHIR</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pesertaexpired as $peserta) {
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
</html>