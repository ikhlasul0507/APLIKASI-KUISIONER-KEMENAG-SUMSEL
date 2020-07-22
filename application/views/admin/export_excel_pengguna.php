 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<h3>LAPORAN INDEX KEPUASAN MASYARAKAT</h3>
 <table class="table mt-2" style="background-color: white">
		<tbody class="thead-dark">
		<tr >
		<td>No</td><td>Nama</td><td>Perusahaan</td><td>Umur</td><td>Jenis Kelamin</td><td>Pendidikan Terakhir</td><td>pekerjaan Utama</td><td>Handphone</td><td>Password</td>
		</tr>
		</tbody>
		<?php 
		$x=1;
		foreach ($pengguna as $pgn) :?>
		<tr>
			<td><?= $x++; ?></td>
			<td><?= $pgn['nama']; ?></td>
			<td><?= $pgn['perusahaan']; ?></td>
			<td><?= $pgn['umur']; ?></td>
			<td><?= $pgn['jenis_kelamin']; ?></td>
			<td><?= $pgn['pendidikan_terakhir']; ?></td>
			<td><?= $pgn['pekerjaan_utama']; ?></td>
			<td><?= $pgn['handphone']; ?></td>
			<td><?= $pgn['password']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>