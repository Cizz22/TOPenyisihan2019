<!DOCTYPE HTML>
<html>
<head>
    <title>Penyisihan Coba</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
 
    
</head>
    <body style="background-color:#364150;">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <center><img src="<?php echo site_url('assets/image/logo4.png'); ?>" class="img-fluid" style="width:50%; height:50%;" ></center>
            <div class="row">
                <div class="col-md-6 mx-auto">

             <br>
                    <br>       <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo site_url("Login/masuk");?>" >
                                <div class="form-group">
                                    <label for="uname1">ID</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="ID" id="uname1" required>
                                    <div class="invalid-feedback">Oops, masukkan ID mu.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name="pass" required autocomplete="new-password">
                                    <div class="invalid-feedback">Masukkan passwordmu juga</div>
                                </div>
                                <div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                                <?php
    $id=$this->session->flashdata('id');
    $pass=$this->session->flashdata('pass');
    if($id){
         ?><p class="text-danger"><?php echo $id; ?></p><?php 
    }elseif($pass){
        ?><p class="text-danger"><?php echo $pass ?></p><?php
    }
    
    ?>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</body>
<script>
  $("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    
    form.addClass('was-validated');
  });
        
</script>
</html>