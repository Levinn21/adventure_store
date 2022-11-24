<?php 
include 'db/connection.php';

$bookss = mysqli_query($connection, 'SELECT * FROM books');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" type="text/css" href="styles.css">

<!-- font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- End of font -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../public/assets/css/bootstrap.min.css">
    <link rel ="icon" href ="img/study1.png">
    <style type="text/css">
      body{
        overflow-x: hidden;
      }
    </style>

    <title>Perpustakaan Keluarga</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
   <!-- logo -->
    <a class="navbar-brand" href="#">
      <img src="img/study.png" style="width: 50px;">
    </a>
    <!-- end of logo -->
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Novel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./navbar/novelfantasy.php">Fantasy</a></li>
            <li><a class="dropdown-item" href="./navbar/horrornovel.php">Horror</a></li>
            <li><a class="dropdown-item" href="./navbar/novelromance.php">Romance</a></li>
          </ul>

        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Education
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./navbar/educationkimia.php">Chemistry</a></li>
            <li><a class="dropdown-item" href="./navbar/educationinggris.php">English</a></li>
            <li><a class="dropdown-item" href="./navbar/educationbiologi.php">Biology</a></li>
          </ul>

        <li class="nav-item">
          <a class="nav-link active" href="./auth/login.php">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./auth/register.php">Register</a>
        </li>
    </div>
  </div>
</nav>
<!--END OF NAVBAR -->

<!-- CAROUSEL -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bg2.png" class="d-block w-100" alt="...">
    </div> 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- END OF CAROUSEL -->

<!-- GRID -->
<hr>
  <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php while ($books = mysqli_fetch_assoc($bookss)) : ?>
                <div class="swiper-slide card">
                    <div class="text-center">
                        <img src="./public/profile-photo/<?= $books['gambar']?>" class="rounded-circle" width="100">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title "><?= $books['judul'] ?></h5>
                        <p class="card-text "><?= $books['genre'] ?></p>
                        <a href="product/index.php?id=<?= $books['id'] ?>" class="btn btn-info text-white">Lihat Buku</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

<div class = "container-fluid">
    <div class =" border-0  h-lg p-3">
      <h4 class = "border-bottom border-top text-center card-body bg-light">Buku Novel Terbaik</h4>
    </div>
  </div>

      <div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="./tokobuku/buku1.php">
        <img src="img/buku1.jpg">
      </a>
      <h2>Nebula</h2>
    </div>

    <div class="col-md-4">
      <a href="./tokobuku/buku2.php">
        <img src="img/buku2.jpg">
      </a>
      <h2 >Bumi</h2>
    </div>

    <div class="col-md-4">
      <a href="./tokobuku/buku3.php">
        <img src="img/buku3.jpg">
      </a>
      <h2>Milea: Suara dari Dilan</h2>
    </div>
  </div>
</div>

    <div class = "container-fluid">
    <div class ="card border-0  mt-3 h-lg p-3">
      <h4 class = "border-bottom border-top text-center card-body bg-light">Daftar Buku Pelajaran</h4>
    </div>
  </div>

      <div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="./navbar/educationkimia.php">
        <img src="img/kimia1.jpg">
        <br>
      </a>
      <h2>Kartun Kimia</h2>
    </div>

    <div class="col-md-4">
      <a href="./tokobuku/buku4.php">
        <img src="img/buku4.png">
      </a>
      <h2>Bahasa Indonesia SMA Kelas X</h2>
    </div>

    <div class="col-md-4">
      <a href="./tokobuku/buku5.php">
        <img src="img/buku5.jpg">
      </a>
      <h2>Matematika</h2>
    </div>
  </div>
</div>
<!-- END OF GRID -->

 <div class="mainfooter">
   <img src="img/footer.png">
 </div>
<!-- END OF FOOTER -->
    <script src="./public/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            slidesPerColumn: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    slidesPerColumn: 1,
                }
            }
        });
    </script>

  </body>
</html>