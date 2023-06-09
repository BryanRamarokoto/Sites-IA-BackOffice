<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Se Connecter en tant qu'administrateur</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo asset('assets/vendors/core/core.css');?>">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo asset('assets/fonts/feather-font/css/iconfont.css');?>">
	<link rel="stylesheet" href="<?php echo asset('assets/vendors/flag-icon-css/css/flag-icon.min.css');?>">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo asset('assets/css/demo_5/style.css');?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo asset('assets/images/favicon.png');?>" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="{{ url('/') }}" class="noble-ui-logo d-block mb-2">Mada<span>News</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">Bonjour administrateur! Connectez-vous à votre compte.</h5>
                    <form class="forms-sample" action="{{ url('/Signin') }}" method="POST">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Mot de passe">
                      </div>
						<a href="{{ url('/ForgetPass') }}" class="d-block mt-3 text-muted">Mot de passe oublié?</a>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          Se Connecter
                        </button>
                      </div>
                      @if(session()->has('Error'))
                        <div class="alert alert-icon-danger mt-3" role="alert">
						    <i data-feather="alert-circle"></i>
						    {{ session('Error') }}
                        </div>
                        @endif
                      <a href="{{ url('/ToSignup') }}" class="d-block mt-3 text-muted">Pas inscrit? Inscrivez-vous.</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo asset('assetsvendors/core/core.js');?>"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo asset('assets/vendors/feather-icons/feather.min.js');?>"></script>
	<script src="<?php echo asset('assets/js/template.js');?>"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>
<!-- 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
</head>
<body>
    <h1>Bonjour admin</h1>
    <a href="{{ url('/ForgetPass') }}">Mot de passe oublié?</a> - <a href="{{ url('/ToSignup') }}">S'inscrire</a>
    <form action="{{ url('/Signin') }}" method="POST">
        {{ csrf_field() }}
        Email : <input type="email" name="email" placeholder="Votre adresse mail"><br>
        Mot de passe : <input type="password" name="password" placeholder="Mot de passe"><br>
        <button type="submit">Se Connecter</button>
    </form>
    @if(session()->has('Error'))
        <p>{{ session('Error') }}</p>
    @endif
</body>
</html> -->