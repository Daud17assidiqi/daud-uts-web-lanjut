<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daud | UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

   <!-- Navbar -->
   <nav class="navbar navbar-light navbar-expand-lg bg-light  fixed-top p-2">
      <a class="navbar-brand text-secondary ms-3" href="#">Prodi Sistem Informasi-Universitas Widyatama</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto  px-4">
          <li class="nav-item">
            <a class="nav-link text-secondary" aria-current="page" href="<?php echo base_url('home'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo base_url('aboutme'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo base_url('education'); ?>">Education</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- endNavbar -->

  <!-- Header -->
  <div class="container">
    <main> 
        <section class="home">
         <h1 class="display-4">Selamat Datang di Website <strong>DAUD ASSIDIQI.</strong></h1>
         <p class="lead">ini digunakan untuk menunjukkan kompetensi saya dalam menggunakan framework HMVC dalam pengembangan aplikasi web serta mengelola source code menggunakan sistem kontrol versi GIT</p> 
         </section>
        <!-- Main -->
        
        <section id="about" class="bg-light text-black">
            <h3>About</h3>
            <p>Halaman ini merupakan halaman selamat datang.</p>
        </section>
  </main>
  <!--endMain  -->
</div>
  <!-- endHeader -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
