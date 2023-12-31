<?php

session_start();

if (!isset($_SESSION['session_username'])){
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project JobHub - Aplikasi Platform Freelancer</title>
  <link href="css/bootstrap-reboot.min.css" rel="stylesheet" >
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link href="gambar/" rel="stylesheet">
</head>
<style>
  .banner{
    height: 55vh;
    background: url(bg1.png);
    background-size: cover;
    background-position: center;
}
</style>
<body class="background" id="background-color">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark v-backgound">
    <div class="container-fluid">
      <a class="navbar-brand navbar-nav md-auto mb-3 mb-lg-2">
        <img style="max-height: 30px;" src="gambar/bagianats.png"  ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 f-font" >
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="komunikasi.html">Komunikasi</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
            aria-expanded="false">Menu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Posting Proyek</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="komunitas.html">Komunitas</a></li>
            </ul>
          </li>
          <li class="nav-item">
             <?php echo "<a>Welcome " . $_SESSION['session_username'] . "</a>"; ?>
          </li>
          <li class="nav-item">
             <a href="logout.php">Logout</a>
          </li>
=
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Banner -->
  <div class="container-fluid banner">
    <div class="container banner-countent col-lg-6">
      <div>
        <p class="fs-1 text-center" style="font-family: Bowlby One SC;">
          Selamat Datang di JOBHUB
        </p>
        <p class="lh-sm text-center d-sm-block" >
          Temukan peluang menarik dan kembangkan kariermu di JobHub,serta selesaikan proyek-proyek Anda dengan mudah 
          dan rasakan kebebasan, fleksibilitas, dan penghasilan yang pantas!
        </p>
      </div>
    </div>
  </div>
  <!-- According -->
  <div class="row container-fluid py-5" >  
    <img src="gambar/Project.png" class="img" style="display: flex; align-items: center; width: 500px; margin-right: 120px;" alt="img"> 
  <div class="my-5 container-fluid col-6 col-md-5 col-lg-6" >
    <h2 class="text-center mb-6" style="color: #87689a; font-family: Bowlby One SC; font-size: 20pt;">
      FITUR UNGGULAN DI JOBHUB</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne" style="font-family: Rubik Medium;" >
          <button class="accordion-button collapsed" style="background-color: #d3c5e1;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Komunikasi dan Kolaborasi
          </button>
        </h2>
        <div id="flush-collapseOne" style="background-color: #eaf7fe;" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body" style="font-weight: Rubik Medium;"><strong> Proyek dan freelancer</strong> dapat berkomunikasi dan berkolaborasi melalui pesan internal di aplikasi</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingtwo" style="font-family: Rubik Medium;" >
          <button class="accordion-button collapsed" style="background-color: #d3c5e1;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
            Dukungan Pelanggan
          </button>
        </h2>
        <div id="flush-collapsetwo" style="background-color: #eaf7fe;" class="accordion-collapse collapse" aria-labelledby="flush-headingtwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body" style="font-weight: Rubik Medium;"><strong> Pelanggan yang responsif</strong> untuk membantu pengguna dalam mengatasi masalah atau pertanyaan terkait proyek atau transaksi.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingthree" style="font-family: Rubik Medium;" >
          <button class="accordion-button collapsed" style="background-color: #d3c5e1;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
            Profil Freelancer yang Mendalam
          </button>
        </h2>
        <div id="flush-collapsethree" style="background-color: #eaf7fe;" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body" style="font-weight: Rubik Medium;"><strong> Setiap freelancer</strong> dapat membuat profil yang komprehensif 
            dengan informasi pengalaman, portofolio, keterampilan, dan testimoni. Ini membantu pemilik proyek dalam memilih freelancer yang sesuai.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingfour" style="font-family: Rubik Medium;" >
          <button class="accordion-button collapsed" style="background-color: #d3c5e1;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
            Sistem Penilaian dan Ulasan
          </button>
        </h2>
        <div id="flush-collapsefour" style="background-color: #eaf7fe;" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body" style="font-weight: Rubik Medium;"><strong>  sistem penilaian dan ulasan </strong> yang transparan untuk membangun reputasi freelancer 
            dan membantu pemilik proyek dalam pengambilan keputusan.</div>
        </div>
      </div>

    </div>
  </div>
  </div>

  <!-- end According -->

  <!-- Popular service -->
  <div class="container-fluid py-5">
    <div class="container" >
      <h2 class="text-center mb-3" style="font-family: Rubik Medium;">Popular Service</h2>

      <div class="row "> 
        <div class="col-lg-3 col-md-4 col-sm-6 ">
          <div class="card border-info" style="width: 15rem;">
            <img src="gambar/ai-artists.jpg" class="card-img-top" alt=" ">
            <div class="card-body"><p style="font-family: Rubik Medium;">AI Artist</p> 
              <p class="card-text">Temukan keajaiban kreativitas yang tak terbatas dan eksplorasi tanpa batas.
                Serta pengalaman artistik yang melampaui batasan </p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>
      
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card border-info" style="width: 15rem;">
            <img src="gambar/logo-design.jpg" class="card-img-top" alt=" ">
            <div class="card-body"><p style="font-family: Rubik Medium; ">Logo Desain</p>
              <p class="card-text">Sampaikanlah melalui Logo Desain yang menggambarkan esensi,
                 kepribadian, dan keunikan dalam diri anda.</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card border-info" style="width: 15rem;">
            <img src="gambar/wordpress.jpg" class="card-img-top" alt=" ">
            <div class="card-body"><p style="font-family: Rubik Medium; ">WordPress</p>
              <p class="card-text">Nikmati kebebasan untuk mengekspresikan diri, berbagi karya seni 
                Anda kepada dunia dengan mudah dan cepat. </p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card border-info" style="width: 15rem;">
            <img src="gambar/voiceover.jpg" class="card-img-top" alt=" ">
            <div class="card-body"><p style="font-family: Rubik Medium; ">Voice Over</p>
              <p class="card-text">Percayakan cerita Anda kepada Voice Over Artist yang 
                berbakat untuk pengalaman audio yang tak terlupakan.</p>
              <a href="#" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

      </div>
      </div>
    </div>
  </div>

  <!--end note -->  
  <div class="container-fluid py-3 " style="background-color: #e6e3ed;" >
    <div class="clearfix  ">
      <img src="gambar/bagianbawah.png" class="col-md-6 float-md-start mb-3 ms-md-3" style="display: flex; width: 200px; margin-right: 80px;" alt="img"> 
      <p class="container-fluid" style="font-size: 18pt;">
        <strong style="font-size: 24pt;">Kontak</strong></br>      
        Jl. Terusan Dieng No.57-59, Pisang candi,</br>
        Kec. Sukun, Kota Malang,</br>
        Jawa Timur (65146)</br>
        Telp: 021-3867613
      </p>
      <!-- Sosmed -->
      <a href="#">
        <button class="btn-floating facebook">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 15 15">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg> 
          <span>JobHub</span>
        </button>
    </a>
    <a href="#" target="_blank">
        <button class="btn-floating whatsapp">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg>
            <span>(00) 1234-1234</span>
        </button>
    </a>
    <a href="#" target="_blank">
      <button class="btn-floating instagram">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
          <span>Job_hub</span>
      </button>
  </a>

    </div>
  </div>


</body>
</html>
