
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?= base_url();?>assets/images/bg.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start" >
                                  <br><br><br><br><br><br>
                                    <header class="entry-header">
                                        <h4 class="text-dark">Daftar Akun !</h4>
                                    </header><!-- .entry-header -->

                                        <form class="ml-2" action="" method="post">

                                          <div class="form-row">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" class="text-dark">Nama</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                            </div>
                                            <div class="form-group ml-4">
                                              <label for="exampleInputPassword1" class="text-dark">Instansi/perusahaan</label>
                                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Instansi/perusahaan" name="perusahaan">
                                            </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" class="text-dark">Umur ()</label>
                                              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur" name="umur">
                                            </div>
                                            <div class="form-group ml-4 ">
                                              <label for="exampleInputPassword1" class="text-dark">Jenis Kelamin</label>
                                              <select class="form-control" style="width: 200px" id="exampleFormControlSelect1" name="jenis_kelamin">
                                                  <option>Laki-Laki</option>
                                                  <option>Perempuan</option>
                                                </select>
                                            </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" class="text-dark">Pendidikan Terakhir</label>
                                              <select class="form-control" style="width: 200px" id="exampleFormControlSelect1" name="pendidikan_terakhir">
                                                  <option>Tidak Sekolah</option>
                                                  <option>SD</option>
                                                  <option>SMP/SLTP</option>
                                                  <option>SMA</option>
                                                  <option>DIPLOMA (D1/D2/D3/D4)</option>
                                                  <option>SARJANA(S1)</option>
                                                  <option>PASCA SARJANA(S2/S3)</option>
                                                 
                                                </select>
                                            </div>
                                            <div class="form-group ml-4">
                                              <label for="exampleInputPassword1" class="text-dark">Pekerjaan Utama</label>
                                              <select class="form-control" style="width: 200px" id="exampleFormControlSelect1" name="pekerjaan_utama">
                                                  <option>PNS</option>
                                                  <option>TNI/POLRI</option>
                                                  <option>PEGAWAI SWASTA</option>
                                                  <option>WIRASWASTA</option>
                                                  <option>PETANI/NELAYAN</option>
                                                  <option>PEDAGANG</option>
                                                  <option>PELAJAR/MAHASISWA</option>
                                                  <option>OTHER</option>
                                                </select>
                                            </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" class="text-dark">Handphone</label>
                                              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Handphone" name="handphone">
                                            </div>
                                            <div class="form-group ml-4">
                                              <label for="exampleInputPassword1" class="text-dark">Password</label>
                                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                <small class="text-dark">Sudah punya Akun , Silahkan<b class="text-danger"> <a href="<?= base_url();?>home/login">Login</a><b></small>
                                          </div>
                                          <button type="submit" class="btn btn-primary" >Daftar</button>
                                        </form>
                                    </div><!-- .entry-content -->

                                  
                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->
