<!DOCTYPE HTML>
<html>
    <head>
    <title >IPA</title>
        <script type="text/javascript" async
		src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_CHTML"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            @font-face{
                font-family:"timeless";
                src:url("../assest/Timeless.ttf")
            }
            
            .transparent{
  background:rgba(255,255,255,1);
}
            body{
                font-family: 'Timeless'
            }
            
        </style>
    </head>
    <body style="background-color:#364150;">
        <nav class="navbar navbar-expand-md navbar-primary bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="#" src="image/favicon.ico"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-brand text-white" href="#">Motion 2019</a>
        <ul class="navbar-nav ml-auto">
         <li><div id="demo" class="jam text-white"></div></li>
        </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi,<?php echo $this->session->userdata('namaketua');?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="ca"><a class="dropdown-item" href="<?php echo site_url('Login/logout');?>">Logout</a></div>
            </div>
        </li>
    </ul>
    </div>
</div> 
</nav>
        <br><br>
		<div class="container text-white">
		<center>
		<h2 class="text-white">"PERHATIAN"</h2>
		<p>Terdapat beberapa hal terkait website pengerjaakan soal</p>
		<p>1. Peserta dilarang keras untuk Merefresh laman web saat penyisihan/TO sedang berlangsung,dikarenakan jawaban akan tereset.</p>
		<p>2. Peserta dilarang keras untuk Memback laman web saat penyisihan/TO sedang berlangsung,dikarenakan jawaban akan tereset.</p>
		<p>3. Peserta tidak dianjurkan mensubmit saat waktu akan habis</p>
		<center>
		</div>
		<br><br>
        <div class="penyisihan container transparent card-body" style="border-radius:10px;">
		<form id="form"> 
            <br>
			<?php
			for($i=0;$i <100; $i++){
				if($soal[$i][6] == 1){
				?><?php echo $i + 1;?><br>
				<img class="soal" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo ".jpg";?>"><br><?php
            ?><?php echo $soal[$i][0] ;?><br><?php
				?>A.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="A" id="A"><?php echo $soal[$i][1];?><br><br><?php
				?>B.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="B" id="B"> <?php echo $soal[$i][2];?><br><br><?php
				?>C.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="C" id="C"> <?php echo $soal[$i][3];?><br><br><?php
				?>D.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="D" id="D"> <?php echo $soal[$i][4];?><br><br><?php
                ?>E.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="E">tidak menjawab<br><br><br><?php
			} if($soal[$i][6] == 2){
            ?><p><?php echo $i + 1;?>. <?php echo $soal[$i][0] ;?></p><?php
				?>A.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="A" id="A"><img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "A.jpg";?>"><br><br><?php
				?>B.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="B" id="B"><img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "B.jpg";?>"><br><br><?php
				?>C.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="C" id="C"> <img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "C.jpg";?>"><br><br><?php
				?>D.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="D" id="D"> <img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "D.jpg";?>"><br><br><?php
               ?>E.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="E">tidak menjawab<br><br><br><?php
			} if($soal[$i][6] == 3) {
            ?><p><?php echo $i + 1;?>. <?php echo $soal[$i][0] ;?></p><?php
				?>A.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="A" id="A"><?php echo $soal[$i][1];?><br><br><?php
				?>B.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="B" id="B"> <?php echo $soal[$i][2];?><br><br><?php
				?>C.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="C" id="C"> <?php echo $soal[$i][3];?><br><br><?php
				?>D.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="D" id="D"> <?php echo $soal[$i][4];?><br><br><?php
                ?>E.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="E">tidak menjawab<br><br><br><?php
			}if($soal[$i][6] == 4){
				?><?php echo $i + 1;?><br>
				<img class="soal" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo ".jpg";?>"><br><?php
            ?><?php echo $soal[$i][0] ;?><br><?php
				?>A.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="A" id="A"><img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "A.jpg";?>"><br><br><?php
				?>B.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="B" id="B"><img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "B.jpg";?>"><br><br><?php
				?>C.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="C" id="C"> <img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "C.jpg";?>"><br><br><?php
				?>D.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="D" id="D"> <img class="pilih" src="<?php echo site_url();echo "assets/Soal/IPA/";echo $soal[$i][5];echo "D.jpg";?>"><br><br><?php
                ?>E.<input type="radio" name="jawaban[<?php echo $soal[$i][5];?>]" value="E">tidak menjawab<br><br><br><?php
			} 
			
			
			}?>
			<center><input id="form" class="btn btn-success" type="submit" value="Selesai" name="submit" style="border-radius:5px;width:200px;height:50px;"/></center>
		</form>
		</div>
        <br>
    
    
    
    </body>
	<script>
	$("#form").submit(function(event){
		event.preventDefault();
		var datanya = $("#form");
	$.ajax({
		type: 'POST',
		url :'<?php echo site_url('Setipa/hitung');?>',
		data: datanya.serialize(),
            success: function (data) {
             if(data>0){
				 window.location.href="<?php echo site_url('Setipa/terimakasih');?>"
			 }else{
				 alert("Maaf terjadi kesalahan,tunggu beberapa saat dan coba mengirim jawaban sekali lagi");
			 }
	}
	});
	return false;
	});
	</script>
<script>
<?php $date = new DateTime($this->session->userdata('waktu'));?>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $date->format("Y-m-d 23:49:00"); ?>").getTime();;
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";
if(distance == 300){
    alert("Waktu anda kurang 5 menit");
}
  if(distance <= 0){
		$("#form").submit();
	}
  
}, 1000);
</script>
    
</html>