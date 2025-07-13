<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Inventaris Koleksi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  

<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

  <body background="<?php echo base_url('assets/pemilik/museum.png') ?>">
  <div class="container"><br><br><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-8">
          <div class="card-body p-2">

            <!-- Nested Row within Card Body -->
            <div class="preloader">
              <div class="cssload-speeding-wheel">
              <div class="col-lg-6 d-none d-lg-block bg-login-image "></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <br>
                    <h1 class="h4 text-gray-900 mb-8"> Sistem Inventaris Koleksi Museum Tekstil</h1>

                    <?php echo $this->session->flashdata('pesan') ?>
                  </div>
                  <br>
                  <form method="post" action="<?php echo base_url('Administrator/auth/proses_login') ?> " class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username Anda" name="username">
                      <?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password Anda" name="password">
                      <br>
                      <?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
                    <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right">
                    <br>
                    <button class="w-100 btn btn-primary ">Login </button>
                    <br><br>
                    <br>
                      <p class="mt-3 mb-3 text-muted">&copy; <?=date('Y')?> by Gandama Fajar Harapan</p>
                      <br>                   
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

  