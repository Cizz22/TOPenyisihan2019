<!DOCTYPE HTML>
<html>
<head>
    <title>soal</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <style>
            @font-face{
                font-family:"timeless";
                src:url("../assest/Timeless.ttf")
            }
        body{
            font-family: "timeless"
        }
    </style>
</head>
<body style="background-color:#364150;">
   <nav class="navbar navbar-expand-md bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand text-white" href="#" >Motion 2019</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-brand" href="#" src="<?php echo site_url('assets/image/logo4.png');?>"></a>
    <ul class="navbar-nav ml-auto col-15">
        <li class=" nav nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi,<?php echo $this->session->userdata('namaketua');?>
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <div class="ca"><a class="dropdown-item" href="<?php echo site_url('Login/logout');?>">Ganti Password</a></div>
            <div class="ca"><a class="dropdown-item" href="<?php echo site_url('Login/logout');?>">Logout</a></div>
            </div>
    </ul>
    </div>
</div> 
</nav>
<br>
     <div class="col-xl-10 mx-auto">
    <div class="card rounded-5">
        <div class="card-header">
        <h3 class="text-center">Tata Tertib Dan Ketentuan Penyisian MOTION 2019</h3>
    </div>
         <div class="card-body">
        <p> 1. Peserta diharuskan login ke dalam akun ujian masing-masing 30 menit sebelum pengerjaan try out berlangsung.</p>
        <p> 2. Peserta diberikan waktu 150 menit untuk mengerjakan soal yang telah disediakan.</p>
        <p> 3. Peserta yang login terlambat tidak akan diberikan tambahan waktu pengerjaan soal.   </p>
        <p> 4. Setiap peserta dilarang bekerja sama dengan peserta lainnya yang berbeda timnya.Peserta dilarang membuka browser lain saat pengerjaan babak penyisihan berlangsung, sistem dapat melacak kecurangan peserta dan peserta yang ketahuan melakukan kecurangan akan di diskualifikasi.</p>
        </div>
    <?php
$sudah = $this->session->flashdata('sudah');
$mulai = $this->session->flashdata('mulai');
$akhir = $this->session->flashdata('akhir');
    if($sudah){
echo "<script type='text/javascript'>alert('$sudah');</script>";
    }
         if($mulai){
echo "<script type='text/javascript'>alert('$mulai');</script>";
    }
         if($akhir){
echo "<script type='text/javascript'>alert('$akhir');</script>";
    }
    ?>
        </div>
         <br>
         <div class="container">
             <center>
    <a href="<?php echo site_url('Setips/aturwaktu');?>"><button  style="border-radius:5px;width:200px;height:50px;" class="btn btn-success ">Masuk</button></a>
            </center>
         </div>
    </div>
</body>

</html>