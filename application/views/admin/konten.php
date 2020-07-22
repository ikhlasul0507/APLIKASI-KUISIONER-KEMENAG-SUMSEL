<br><br><br><br>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
	<header>
		<h6><b>Admin/</b></h6>
	</header>
	 <?php if($this->session->flashdata('flash')): ?>
         <div class="alert alert-success alert-dismissible fade show ml-2" role="alert">
          <strong><?php echo $this->session->flashdata('flash');?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <script type="text/javascript">
  	$('.alert').alert()
  </script>
         </div>
     <?php endif; ?>
	<table class="table">
		<tr>
			<td>No</td><td><b>Username</b></td><td><b>Password</b></td><td><b>Action</b></td>
		</tr>
		<?php $no=1;
		foreach ($admin as $adm) :?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $adm['username']; ?>
			</td><td><?= $adm['password']; ?></td>
			<td>
				<a href="<?= base_url();?>admin/ubah/<?= $adm['id_admin']; ?>">
				<i class="fa fa-pencil-square-o fa-2x" style="color:green"></i></a>
				<a href="<?= base_url();?>admin/hapus/<?= $adm['id_admin']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');"><i class="fa fa-trash fa-2x ml-2" style="color:red"></i></a>
				
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</div>
</div>
