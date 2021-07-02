<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SKP PEGAWAI</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="/theme/dist/css/adminlte.min.css">

  @toastr_css
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      .login-page {
            background-image: url("/theme/bg3.jpg");
            background-size: cover;
            height:"10px";
            }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        
    <div class="login-logo" style="margin-bottom:0px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Hulu_Sungai_Utara.png" width="80px"><br/>
        <a href="#"><b>SKP PEGAWAI</b>
        </a>
    </div>
      <p class="login-box-msg"><b>BKPP Kabupaten Hulu Sungai Utara</b></p>

      <form action="/login" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <button type="submit" class='btn btn-block btn-primary'>Login</button>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/theme/plugins/jquery/jquery.min.js"></script>
<script src="/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/theme/dist/js/adminlte.min.js"></script>

@toastr_js
@toastr_render
</body>
</html>
