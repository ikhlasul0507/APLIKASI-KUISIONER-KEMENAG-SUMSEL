<br><br><br><br>
<div class="container mt-5">
	<div class="row">
		<div class="col">
	<header>
		<h6>Admin/<b>Kuisioner</b></h6><a href="<?= base_url();?>admin/export_excel_kuisioner" class="btn btn-primary">Export Excel</a>
	</header>
	<!-- Button trigger modal -->
	<a href="<?= base_url(); ?>admin/pertanyaan" class="badge badge-success">Lihat Pertanyaan</a>

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
		<td>Action</td>
		</tr>

		</tbody>

		<?php foreach ($kuisioner as $ks) :?>
		<tr>
			<td><?= ++$start ?></td>
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
			<td>
				<a href="<?= base_url();?>admin/hapus_kuisioner/<?= $ks['id_kuisioner']; ?>" onclick="return confirm('Yakin Ingin Menghapus ?');"><i class="fa fa-trash fa-2x" style="color:red"></i></a>
			</td>
			
		</tr>
		<?php endforeach; ?>
	</table>
		<?= $this->pagination->create_links(); ?>
	</div>
	</div>
</div>

085783859632