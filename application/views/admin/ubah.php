<br><br><br><br>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
	<header>
		<h6>Admin/<b>Ubah</b></h6>
	</header>
	<table class="table">
		<tr>
			
										<form action="" method="post">
											<input type="hidden" name="id_admin" value=" <?= $admin['id_admin'];?>">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-dark">Username</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" required autocomplete autofocus value=" <?= $admin['username']; ?>">
                                           
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required autofocus autocomplete value=" <?= $admin['password']; ?>">
                                          </div>
                                          <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                                        </form>
			
		</tr>
		
		
	</table>
	</div>
	</div>
</div>
