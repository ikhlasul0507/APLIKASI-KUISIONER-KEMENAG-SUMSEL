 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

<h3>LAPORAN INDEX KEPUASAN MASYARAKAT</h3>
<table class="table mt-3" style="background-color: white">
		<tbody class="thead-dark">
		<tr >
		<td>No</td>
		<td>Nama</td>
		<td>Handphone</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
		<td>Saran</td>
		</tr>

		</tbody>

		<?php 
		$s=1;
		foreach ($kuisioner as $ks) :?>
		<tr>
			<td><?= $s++; ?></td>
			<td><?= $ks['nama']; ?></td>
			<td><?= $ks['handphone']; ?></td>
			<td><?= $ks['nilai1']; ?></td>
			<td><?= $ks['nilai2']; ?></td>
			<td><?= $ks['nilai3']; ?></td>
			<td><?= $ks['nilai4']; ?></td>
			<td><?= $ks['nilai5']; ?></td>
			<td><?= $ks['nilai6']; ?></td>
			<td><?= $ks['nilai7']; ?></td>
			<td><?= $ks['nilai8']; ?></td>
			<td><?= $ks['nilai9']; ?></td>
			<td><?= $ks['nilai10']; ?></td>
			<td><?= $ks['nilai11']; ?></td>
			<td><?= $ks['nilai12']; ?></td>
			<td><?= $ks['nilai13']; ?></td>
			<td><?= $ks['nilai14']; ?></td>
			<td><?= $ks['saran']; ?></td>
			
		</tr>
		<?php endforeach; ?>
	</table>