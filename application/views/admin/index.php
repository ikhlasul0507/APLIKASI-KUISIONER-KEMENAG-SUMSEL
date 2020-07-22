
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?= base_url(); ?>assets/images/bg.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h4 class="text-dark">Login</h4>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-6">
                                        <form action="<?= base_url()?>admin/ceklogin" method="post">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-dark">Username</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" required autocomplete autofocus="">
                                           
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required autofocus autocomplete>
                                          </div>
                                          <div class="form-group">
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
