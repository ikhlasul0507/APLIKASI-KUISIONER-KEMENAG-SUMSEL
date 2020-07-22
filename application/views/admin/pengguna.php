<br><br><br><br>
<div class="container mt-5">
	<div class="row">
		<div class="col">
	<header>
		<h6>Admin/<b>pengguna</b></h6><a href="<?= base_url();?>admin/export_excel_pengguna" class="btn btn-primary">Export Excel</a>
	</header>
	<table class="table mt-2" style="background-color: white">
		<tbody class="thead-dark">
		<tr >
		<td>No</td><td>Nama</td><td>Perusahaan</td><td>Umur</td><td>Jenis Kelamin</td><td>Pendidikan Terakhir</td><td>pekerjaan Utama</td><td>Handphone</td><td>Password</td><td>Action</td>
		</tr>
		</tbody>
		<?php 
		foreach ($pengguna as $pgn) :?>
		<tr>
			<td><?= ++$start ?></td>
			<td><?= $pgn['nama']; ?></td>
			<td><?= $pgn['perusahaan']; ?></td>
			<td><?= $pgn['umur']; ?></td>
			<td><?= $pgn['jenis_kelamin']; ?></td>
			<td><?= $pgn['pendidikan_terakhir']; ?></td>
			<td><?= $pgn['pekerjaan_utama']; ?></td>
			<td><?= $pgn['handphone']; ?></td>
			<td><?= $pgn['password']; ?></td>
			<td>
				<a href="<?= base_url();?>admin/hapus_pengguna/<?= $pgn['id_user']; ?>" onclick="return confirm('Yakin Ingin Menghapus ?');"><i class="fa fa-trash fa-2x" style="color:red"></i>
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<h6>Data ke <?= $start; ?></h6>
		<?= $this->pagination->create_links(); ?>
	</div>
	</div>
</div>
