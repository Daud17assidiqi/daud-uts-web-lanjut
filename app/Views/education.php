<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daud | UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
</head>
<style>
   

</style>
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
<div class="container">
   <div class="row ">
      <div class="col">
      <h2 class="display-4">My Education</h2>
      </div>
   </div>
</div>

<table>
 <tr>
    <th>Tingkatan</th>
    <th>Nama Sekolah</th>
 </tr>
 <tr>
    <td>TK</td>
    <td>Al Hidayah</td>
 </tr>
 <tr>
    <td>SD</td>
    <td>SDN 1 Kota Lorem</td>
 </tr>
 <tr>
    <td>SMP</td>
    <td>SMPN 1 Kota Lorem</td>
 </tr>
 <tr>
    <td>SMA</td>
    <td>SMAN 1 Kota Lorem</td>
 </tr>
</table>

</body>
</html>