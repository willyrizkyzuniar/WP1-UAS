<?php
session_start();
error_reporting(0);
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <title>BELAJAR CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">

</head>

<body>


  <div class="container">
    <div id="wrapper">
      <nav class="navbar navbar-light">
        <span class="navbar-text">
          <h1>Web Programing 1</h1>
        </span>
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php?page=me">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=read">Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=readbuku">Data Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=add">Tambah Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=addbuku">Tambah Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
        </ul>
      </nav>

      <div class="container box">
        <?php include "pages.php"; ?>
      </div>
    </div>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replaceAll('editor', {
      height: 300
    });
  </script>
</body>

</html>