<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>NabatiJahtera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        body {
          background-image: url('1.jpg');
          background-repeat: no-repeat;
          background-attachment: scroll; 
          background-size: cover;
        }
        </style>
  </head>
  <body class="bg-white">
    <div class="container p-0 border mb-4 mt-4 rounded-3 shadow bg-white">
        <!-- Navbar Start -->
        <navbar id="navbar" class="d-md-flex p-4">
          <div>
            <h1>NabatiJahtera</h1>
          </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3"><a href="#koleksi" class="text-decoration-none text-dark fw-bold">Produk Kami</a></li>
                    <li class="list-inline-item mx-md-3"><a href="index2.php" class="text-decoration-none text-dark fw-bold">Data Peternakan</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#tentang" class="text-decoration-none text-dark fw-bold">Tentang Kami</a></li>
                    <li class="list-inline-item mx-md-3"><a href="logout.php" class="text-decoration-none text-dark fw-bold">Logout</a></li>
                </ul>
            </div>
        </navbar>
    </div>
    
    <!--katalog-->
    <div class="container">
      <hr>
      <h3 id="koleksi" class="text-center">Produk Kami</h3>
      <hr>
        <div class="text-center w-50 mx-auto fw-light">
        </div>
        <div class="row row-cols-md-3 row-cols-sm-2 gx-5 p-5">
          <div class="col mb-5">
            <div class="card shadow">
              <img src="ayam.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Ayam Jago.</p>
                <p class="card-text">Nama Penjual : Bapak Hartono</p>
                <p class="card-text">Alamat : Banten</p>
              </div>
              <div class="d-none deskripsi"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aut aliquid consequatur hic, consectetur natus nulla saepe, rem, magnam veritatis dolores inventore. Dolor quibusdam cum quos, iste numquam laboriosam optio.</p></div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.50.000</span>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="sapi.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Sapi Perah</p>
                <p class="card-text">Nama Penjual : Bapak Guntur</p>
                <p class="card-text">Alamat : Jakarta Selatan</p>
              </div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.20.000.000</span>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="wedus.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Kambing.</p>
                <p class="card-text">Nama Penjual : Bapak Sukarni</p>
                <p class="card-text">Alamat : Bandung</p>
              </div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.5.000.000</span>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="wedos.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Kambing Putih</p>
                <p class="card-text">Nama Penjual : Bapak Rusdi</p>
                <p class="card-text">Alamat : Surabaya</p>
              </div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.7.000.000</span>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="sapii.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Sapi gemuk.</p>
                <p class="card-text">Nama Penjual : Bapak Bromo</p>
                <p class="card-text">Alamat : Bogor</p>
              </div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.30.000.000</span>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow">
              <img src="pitik.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Ayam Cemani</p>
                <p class="card-text">Nama Penjual : Bapak Gugus</p>
                <p class="card-text">Alamat : Surakarta</p>
              </div>
              <div class="card-footer d-md-flex">
                <a href="https://wa.me/+6282245953995"class="btn btn-sm btn-primary d-block btnDetail">pesan</a>
                <span class="kontol">harga: Rp.7.000.000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--tentang-->
        <div class="container p-0 mb-4 mt-4 rounded-3 shadow">
        <div id="tentang" class="telek">
          <div class="mx-auto w-75">
            <hr>
            <h3 class="text-white text-center">Tentang Kami</h3>
            <p class="bgitulah text-white"><img src="logo.jpg" align="left" style="width: 200px;height: auto;" class="me-3 mb-3">Kami dari Kelompok Dark Unicorn yang beranggotakan:</p>
            <p class="list"> - Salva Nur Azzahra (Ketua)</p>
            <p class="list"> - Satria Andika Saif Maulana</p>
            <p class="list"> - Muhammad Fathan Agriliyan</p>
            <hr>
          </div>
        </div>

        <!--kopikanan-->
        <div class="tae p-4 border-top text-center">&copy; 2023 Copyright web</div>
    </div>
  </body>
</html>
</body>
</html>
