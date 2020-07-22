
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?= base_url();?>assets/images/bg.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                         <?php if($this->session->flashdata('pesan')): ?>
                                      <div class="alert alert-success alert-dismissible fade show ml-2" role="alert">
                                        <strong><?php echo $this->session->flashdata('pesan');?></strong><br>  Sampai Jumpa Lagi ^-^.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      
                                    <?php endif; ?>
                                        <h1>APLIKASI<br>IKM</h1>
                                        <h5 class="text-dark">(Index Kepuasan Masyarakat)</h5>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <h3 class="text-dark"><b>Kementerian Agama Provinsi Sumsel<b></h3>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="<?= base_url();?>home/login" class="button btn-success"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Isi Kuisioner</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->
