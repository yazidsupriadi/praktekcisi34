<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Main CSS -->

    <!-- File CSS Lokal -->
  
    <link rel="stylesheet" href="<?= base_url('frontend/css/style.css') ?>">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

    <title>Siwikode | Home</title>
  </head>
  <body id="up" onload="popup()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-dark fixed-top" id="secNav">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata-rekreasi.html">Wisata Rekreasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wisata-kuliner.html">Wisata Kuliner</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#up" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registrasi
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="registrasi-rekreasi.html">Wisata Rekreasi</a>
                <a class="dropdown-item" href="registrasi-kuliner.html">Wisata Kuliner</a>
              </div>
            </li>  
          </ul>
          <span class="navbar-text">
            <a class="nav-link" href="<?=base_url()?>index.php/login/login">Login</a>
          </span>
        </div>
      </div> 
    </nav>
    <!-- Akhir Navbar -->
    
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-12 order-lg-2">
            <div class="masthead-img">
              <img class="img-fluid" src="assets/imgs/undraw_destinations_fpv7.svg" alt="">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-12 order-lg-1">
            <div class="masthead-heading">Sistem Informasi <br> Wisata Kota Depok</div>
            <div class="masthead-subheading">Ingin Berwisata di Kota Depok? Kunjungi Website Kami</div>
          </div>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Daftar Populer -->
    <section class="page-section" id="section">
      <div class="container">
        <h2 class="section-heading text-center">Wisata Rekreasi & Kuliner Unggulan</h2>
        <hr>
        <div class="row">
          <div class="owl-carousel owl-theme">
            <div class="col-md-12">
              <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url(assets/imgs/kubah/thumb-0.jpg);">
                <div class="card-category">Rekreasi</div>
                <div class="card-description">
                  <h5>Masjid Kubah Emas</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-rekreasi.html" ></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card" style="background: white;, url(assets/imgs/wiladatika/thumb-0.jpg); ?>">
              
              <img src="<?= base_url('frontend/assets/imgs/aladin/testi-artis.jpg') ?>" alt="" width="400px">
                <div class="card-category">Kuliner</div>
                <div class="card-description">
                  <h5>Kopi Nako</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-kuliner.html" ></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url(assets/imgs/wiladatika/thumb-0.jpg);">
                <div class="card-category">Rekreasi</div>
                <div class="card-description">
                  <h5>Taman Wiladatika</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-rekreasi.html" ></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url(assets/imgs/drumbs/thumb-0.jpg);">
                <div class="card-category">Kuliner</div>
                <div class="card-description">
                  <h5>Walking Drums</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-kuliner.html" ></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url(assets/imgs/d-kandang/thumb-0.jpg);">
                <div class="card-category">Rekreasi</div>
                <div class="card-description">
                  <h5>D'kandang Amazing Farm</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-rekreasi.html" ></a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url(assets/imgs/louis/thumb-1.jpg);">
                <div class="card-category">Kuliner</div>
                <div class="card-description">
                  <h5>Louis Cafe</h5>
                  <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                  </ul>
                </div>
                <a class="card-link" href="wisata-kuliner.html" ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Daftar Populer -->

    <!-- Profile Kelompok -->
    <h2 style="text-align: center;"> Profile Kelompok 8</h2>
    <hr>
    <section class="daftar-section pt-4">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-12 col-sm-6 col-lg-3 order-sm-1 order-xl-1">
            <img class="img-fluid" src="assets/imgs/profile/aulia.jpeg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-2 order-xl-2 point-left">
            <div class="item-desc">
              <h2> SRI AULIA TRISNA</h2>
              <br>
              <h3>0110120034</h3>
              <h3>SISTEM INFORMASI</h3>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 order-sm-3 order-xl-3">
            <img class="img-fluid" src="assets/imgs/profile/dian.jpeg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-4 order-xl-4 point-left">
            <div class="item-desc">
              <h2> DIAN ISLAMIATI</h2>
              <br>
              <h3>0110120017</h3>
              <h3>SISTEM INFORMASI</h3>
            </div>
          </div>
        </div>
        <div class="row no-gutters">

          <div class="col-12 col-sm-6 col-lg-3 order-sm-5 order-xl-2">
            <img class="img-fluid" src="assets/imgs/profile/salwa.jpeg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-6 order-xl-1 point-right">
            <div class="item-desc">
              <h2> SALWA RAFIDAH</h2>
              <br>
              <h3>0110120150</h3>
              <h3>SISTEM INFORMASI</h3>
            </div>
          </div>
    
          <div class="col-12 col-sm-6 col-lg-3 order-sm-7 order-xl-4">
            <img class="img-fluid" src="assets/imgs/profile/zakky.jpeg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-8 order-xl-3 point-right">
            <div class="item-desc">
              <h2> AHMAD MUZAKKY</h2>
              <br>
              <h3>0110120167</h3>
              <h3>SISTEM INFORMASI</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Profile kelompok -->

    <!-- Footer -->
    <footer class="footer py-4 text-white">
      <div class="container">
          <div class="row">
              <div class="col-md-12">Develop By Mahasiswa @ STT-NF 2020</div>
          </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <!--js lokal-->
    <script src="<?= base_url('frontend/js/script.js') ?>"></script>
  </body>
</html>
