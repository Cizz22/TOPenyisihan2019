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
   <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="#" src="image/favicon.ico"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-brand text-white" href="#">Motion 2019</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi,<?php echo $this->session->userdata('namaketua');?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="ca"><a class="dropdown-item" href="<?php echo site_url('Login/logout');?>">Logout</a></div>
            </div>
    </ul>
    </div>
</div> 
</nav>
<br>
<br>
<div class="col-xl-10 mx-auto">
    <div class="card rounded-5">
        <div class="card-header">
        <h2 class="text-center">Terima Kasih</h2>
    </div>
        <div class="card-body">
		<p>Jawaban anda telah kami terima,apabila mendapatkan kendala harap hubungi CP berikut:</p>
        </div>

        </div>
    </div>
</body>

</html>