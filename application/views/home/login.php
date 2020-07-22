
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?= base_url(); ?>assets/images/bg.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                  <?php if($this->session->flashdata('pesan')): ?>
                                      <div class="alert alert-success alert-dismissible fade show ml-2" role="alert">
                                        <strong><?php echo $this->session->flashdata('pesan');?></strong>  Silahkan Login .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                      </div>
                                      
                                    <?php endif; ?>
                                    <header class="entry-header">
                                        <h4 class="text-dark">Login</h4>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-6">
                                        <form action="<?= base_url()?>home/ceklogin" method="post">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-dark">Handphone</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Handphone" name="handphone" required autocomplete autofocus="">
                                           
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required autofocus autocomplete>
                                          </div>
                                          <div class="form-group">
                                                <small class="text-dark">Belum punya Akun , Silahkan <a href="<?= base_url();?>home/daftar"><b>Daftar</b></a></small>
                                          </div>
                                          <button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
                                          
                                        </form>
                                    </div><!-- .entry-content -->

                                  
                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->
