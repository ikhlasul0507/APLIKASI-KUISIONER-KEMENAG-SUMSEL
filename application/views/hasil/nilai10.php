
          <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?= base_url();?>assets/images/bg.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-start">

 <script type="text/javascript" src="<?= base_url();?>assets/chart/chart.js"></script>
                                            <br><br><br><br><br><br>
                                            <h3 class="text-dark ml-3"><B>GRAFIK INDEX KEPUASAN MASYARAKAT</B></h3>
                                            <H6 class="text-dark ml-3">KEMENTERIAN AGAMA<BR>KANTOR WILAYAH SUMSEL</H6>
                                            <HR>
                                          
                                                <div class="container">
                                                 <center>    
                                    <table class="table text-dark" style="background-color: white">
                                             <tr>
                                               <td>No</td>
                                               <td>Pertanyaan</td>
                                               <td>Grafik</td>
                
                                           </tr>
                                           <tr>
                                               <td>10</td>
                                               <td>Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan.<br>
                                                    a. Tidak wajar.<br>
                                                    b. Kurang wajar.<br>
                                                    c. Wajar.<br>
                                                    d. Sangat wajar

                                                    </td>
                                                              <td>                
                                         <div style="width: 400 px; margin: 0px auto;">
                                                <canvas id="myChart"></canvas>
                                            </div>
                                       <script>
                                         

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["A ", "B", "C","D"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $a = $this->db->query('SELECT *FROM tbl_kuisioner WHERE nilai10="a"');
                    $hasil= $a->num_rows();
                    echo $hasil;

                    ?>, 
                    <?php 
                    $b = $this->db->query('SELECT *FROM tbl_kuisioner WHERE nilai10="b"');
                    $hasil= $b->num_rows();
                    echo $hasil;
                    ?>, 
                    <?php 
                    $c = $this->db->query('SELECT *FROM tbl_kuisioner WHERE nilai10="c"');
                    $hasil= $c->num_rows();
                    echo $hasil;
                    ?>,
                    <?php 
                    $d = $this->db->query('SELECT *FROM tbl_kuisioner WHERE nilai10="d"');
                    $hasil= $d->num_rows();
                    echo $hasil;
                    ?>,
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>   

                                                </td>
                                           </tr>
                                          
                                        </table>

                                          </center>
                                          <a href="<?= base_url(); ?>hasil" class="btn btn-success">Kembali</a>
                                    
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
           
