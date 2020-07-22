
<title><?= $judul; ?></title>
<link href='<?= base_url();?>assets/images/logokemenag.png' rel='shortcut icon'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url();?>assets/style.css">
    <script src="<?= base_url();?>assets/js/custom.js"></script>
<body background="<?= base_url();?>assets/images/bg.jpg">
    
                                    <header class="entry-header">
                                        <div class="row">
                                            <div class="col mt-3 ml-5"> <center><img src=" <?= base_url();?>assets\images\logokemenag.png"></center></div>
                                            <div class="col "> <h4 class="text-dark"><br>KUISIONER PELAYANAN MASYARKAT<br>KANTOR WILAYAH KEMENTRIAN AGAMA<BR>SUMATERA SELATAN</h4></div>
                                        </div>
                                       
                                        <hr>
                                    </header><!-- .entry-header -->
                                    <div class="container">
                                    <div class="entry-content mt-4" style="background-color: white; border-radius: 10">
                                        <p class="ml-2"><b>INDENTITAS RESPONDEN</b></p>
                                       <?php 

                                       

                                          $row = $this->db->query("SELECT * FROM tbl_user where handphone='".$this->session->handphone."'")->row_array();
                                            ?>
                                              <form method="post" action="">
                                        <table class="table text-dark">
                                            <tr>
                                                <td width="200px">Nama</td><td>:<b><input style="border:none;" class="form" type="text" name="nama" value="<?= $row['nama']; ?>" readonly></b></td>
                                            </tr>
                                             <tr>
                                                <td>Handphone</td><td>: <b><input style="border:none;" class="form" type="text" name="handphone" value="<?= $row['handphone']; ?>" readonly></b></td>
                                            </tr>
                                            <tr>
                                                <td>Instansi/Perusahaan</td><td>: <b><?= $row['perusahaan']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Umur</td><td>: <b><?= $row['umur']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td><td>:<b> <?= $row['jenis_kelamin']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Terakhir</td><td>:<b> <?= $row['pendidikan_terakhir']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan Utama</td><td>:<b> <?= $row['pekerjaan_utama']; ?></b></td>
                                            </tr>
                                        </table>
                                      <? ?>
                                        <HR>
                                         <p class="ml-2"><b>PETUNJUK</b></p>
                                        <ul class="list-group">
                                              <li class="list-group-item">1.Tujuan survei ini adalah untuk memperoleh gambaran secara obyektif mengenai kepuasanmasyarakat terhadap pelayanan publik.</li>
                                              <li class="list-group-item">2.Nilai yang diberikan oleh masyarakat diharapkan sebagai nilai yang dapat dipertanggungjawabkan</li>
                                              <li class="list-group-item">3.Hasil survei ini akan digunakan untuk bahan penyusunan indeks kepuasan masyarakat terhadap pelayanan publik yang sangat bermanfaat bagi pemerintah maupun masyarakat.</li>
                                              <li class="list-group-item">4.Keterangan nilai yang diberikan bersifat terbuka dan tidak dirahasiakan.</li>
                                              <li class="list-group-item">5.Survei ini tidak ada hubungannya dengan pajak ataupun politik.</li>
                                            </ul>
                                         <p class="ml-2"><b>KUISIONER</b></p>
                                       
                                        <table class="table text-dark">
                                             <tr>
                                               <td>No</td>
                                               <td>Pertanyaan</td>
                                                <td>Jawaban</td>
                                           </tr>
                                           <tr>
                                               <td>1</td>
                                               <td>Bagaimana pemahaman Saudara tentang kemudahanprosedur pelayanan di unit ini.<br>
                                                    a. Tidak mudah.<br>
                                                    b. Kurang mudah.<br>
                                                    c. Mudah.<br>
                                                    d. Sangat mudah.
                                                    </td>
                                                <td><input type="radio" name="nilai1" value="a"/> A<br>
                                                    <input type="radio" name="nilai1" value="b"/> B<br>
                                                    <input type="radio" name="nilai1" value="c"/> C<br>
                                                    <input type="radio" name="nilai1" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>2</td>
                                               <td>Bagaimana pendapat Saudara tentang kesesuaianpersyaratan pelayanan dengan jenis pelayanannya.<br>
                                                    a.  Tidak sesuai.<br>
                                                    b.  Kurang sesuai.<br>
                                                    c.  Sesuai.<br>
                                                    d.  Sangat sesuai.

                                                    </td>
                                                <td><input type="radio" name="nilai2" value="a"/> A<br>
                                                    <input type="radio" name="nilai2" value="b"/> B<br>
                                                    <input type="radio" name="nilai2" value="c"/> C<br>
                                                    <input type="radio" name="nilai2" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>3</td>
                                               <td>Bagaimana pendapat Saudara tentang kejelasan dan kepastian petugas yang melayani.<br>
                                                    a. Tidak jelas.<br>
                                                    b. Kurang jelas.<br>
                                                    c. Jelas.<br>
                                                    d. Sangat jelas.<br>

                                                    </td>
                                                <td><input type="radio" name="nilai3" value="a"/> A<br>
                                                    <input type="radio" name="nilai3" value="b"/> B<br>
                                                    <input type="radio" name="nilai3" value="c"/> C<br>
                                                    <input type="radio" name="nilai3" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>4</td>
                                               <td>Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam memberikan pelayanan<br>
                                                    a. Tidak disiplin<br>
                                                    b. Kurang disiplin<br>
                                                    c. Disiplin<br>
                                                    d. Sangat disiplin

                                                    </td>
                                                <td><input type="radio" name="nilai4" value="a"/> A<br>
                                                    <input type="radio" name="nilai4" value="b"/> B<br>
                                                    <input type="radio" name="nilai4" value="c"/> C<br>
                                                    <input type="radio" name="nilai4" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>5</td>
                                               <td>Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan.<br>
                                                    a. Tidak bertanggung jawab.<br>
                                                    b. Kurang bertanggung jawab.<br>
                                                    c. Bertanggung jawab.<br>
                                                    d. Sangat bertanggung jawab.

                                                    </td>
                                                <td><input type="radio" name="nilai5" value="a"/> A<br>
                                                    <input type="radio" name="nilai5" value="b"/> B<br>
                                                    <input type="radio" name="nilai5" value="c"/> C<br>
                                                    <input type="radio" name="nilai5" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>6</td>
                                               <td>Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan.<br>
                                                    a. Tidak mampu.<br>
                                                    b. Kurang mampu.<br>
                                                    c. Mampu.<br>
                                                    d. Sangat mampu

                                                    </td>
                                                <td><input type="radio" name="nilai6" value="a"/> A<br>
                                                    <input type="radio" name="nilai6" value="b"/> B<br>
                                                    <input type="radio" name="nilai6" value="c"/> C<br>
                                                    <input type="radio" name="nilai6" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>7</td>
                                               <td>Bagaimana pendapat Saudara tentang kecepatan pelayanan di unit ini.<br>
                                                    a. Tidak cepat.<br>
                                                    b. Kurang cepat.<br>
                                                    c. Cepat.<br>
                                                    d. Sangat cepat.

                                                    </td>
                                                <td><input type="radio" name="nilai7" value="a"/> A<br>
                                                    <input type="radio" name="nilai7" value="b"/> B<br>
                                                    <input type="radio" name="nilai7" value="c"/> C<br>
                                                    <input type="radio" name="nilai7" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>8</td>
                                               <td>Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di unit ini.<br>
                                                    a. Tidak adil.<br>
                                                    b. Kurang adil.<br>
                                                    c. Adil.<br>
                                                    d. Sangat adil.

                                                    </td>
                                                <td><input type="radio" name="nilai8" value="a"/> A<br>
                                                    <input type="radio" name="nilai8" value="b"/> B<br>
                                                    <input type="radio" name="nilai8" value="c"/> C<br>
                                                    <input type="radio" name="nilai8" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>9</td>
                                               <td>Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan.<br>
                                                    a. Tidak sopan dan ramah.<br>
                                                    b. Kurang sopan dan ramah.<br>
                                                    c. Sopan dan ramah.<br>
                                                    d. Sangat sopan dan ramah.

                                                    </td>
                                                <td><input type="radio" name="nilai9" value="a"/> A<br>
                                                    <input type="radio" name="nilai9" value="b"/> B<br>
                                                    <input type="radio" name="nilai9" value="c"/> C<br>
                                                    <input type="radio" name="nilai9" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>10</td>
                                               <td>Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan.<br>
                                                    a. Tidak wajar.<br>
                                                    b. Kurang wajar.<br>
                                                    c. Wajar.<br>
                                                    d. Sangat wajar

                                                    </td>
                                                <td><input type="radio" name="nilai10" value="a"/> A<br>
                                                    <input type="radio" name="nilai10" value="b"/> B<br>
                                                    <input type="radio" name="nilai10" value="c"/> C<br>
                                                    <input type="radio" name="nilai10" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>11</td>
                                               <td>Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan.<br>
                                                    a. Selalu tidak sesuai.<br>
                                                    b. Kadang-kadang sesuai.<br>
                                                    c. Banyak sesuainya.<br>
                                                    d. Selalu sesuai.

                                                    </td>
                                                <td><input type="radio" name="nilai11" value="a"/> A<br>
                                                    <input type="radio" name="nilai11" value="b"/> B<br>
                                                    <input type="radio" name="nilai11" value="c"/> C<br>
                                                    <input type="radio" name="nilai11" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>12</td>
                                               <td>Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelayanan.<br>
                                                    a. Selalu tidak tepat.<br>
                                                    b. Kadang-kadang tepat.<br>
                                                    c. Banyak tepatnya.<br>
                                                    d. Selalu tepat.

                                                    </td>
                                                <td><input type="radio" name="nilai12" value="a"/> A<br>
                                                    <input type="radio" name="nilai12" value="b"/> B<br>
                                                    <input type="radio" name="nilai12" value="c"/> C<br>
                                                    <input type="radio" name="nilai12" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>13</td>
                                               <td>Bagaimana pendapat Saudara tentang kenyamanan di lingkungan unit pelayanan.<br>
                                                    a. Tidak nyaman.<br>
                                                    b. Kurang nyaman.<br>
                                                    c. Nyaman.<br>
                                                    d. Sangat nyaman.

                                                    </td>
                                                <td><input type="radio" name="nilai13" value="a"/> A<br>
                                                    <input type="radio" name="nilai13" value="b"/> B<br>
                                                    <input type="radio" name="nilai13" value="c"/> C<br>
                                                    <input type="radio" name="nilai13" value="d"/> D<br>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>14</td>
                                               <td>Bagaimana pendapat Saudara tentang keamanan pelayanan di unit ini.<br>
                                                    a. Tidak aman.<br>
                                                    b. Kurang aman.<br>
                                                    c. Aman.<br>
                                                    d. Sangat aman.

                                                    </td>
                                                <td><input type="radio" name="nilai14" value="a"/> A<br>
                                                    <input type="radio" name="nilai14" value="b"/> B<br>
                                                    <input type="radio" name="nilai14" value="c"/> C<br>
                                                    <input type="radio" name="nilai14" value="d"/> D<br>
                                                </td>
                                           </tr>
                                        </table>
                                        <hr>
                                        <div class="form-group container">
                                            <label for="exampleFormControlTextarea1">Saran-saran untuk Perbaikan<br>
                                              <small>*Maksimal 500 karakter</small>
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="saran"></textarea>
                                          </div>
                                        <hr>
                                        <div>
                                          <button type="submit" class="btn btn-primary btn-lg ml-4">Kirim</button>
                                          <a href="<?= base_url();?>home"><button type="button" class="btn btn-primary btn-lg ml-4">Batal</button></a>
                                          
                                        </div>
                                        <hr>
                                      </form>
                                    </div><!-- .entry-content -->
                                    </div>
                                   
</body>
       