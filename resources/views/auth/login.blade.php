<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Carlitos Hair International UH</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  {!!Html::style('assets/css/materialize.css')!!}
  {!!Html::style('assets/css/style.css')!!}
  {!!Html::style('assets/css/page-center.css')!!}
  {!!Html::style('assets/css/prism.css')!!}
  {!!Html::style('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')!!}
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
    <form class="login-form" role="form" method="POST" action="{{ route('user.login') }}">
                        {{ csrf_field() }}

       
        <div class="row">
          <div class="input-field col s12 center">
            <img src="assets/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Carlitos Hair International UH</p>
          </div>
        </div>

        <div class="row margin{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="new-password">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
            <label for="username" class="center-align">Username</label>
          </div>
          </div>

        
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12">Login</button> 
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="{{ route('register') }}">Registar agora!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">E. password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  
  <!-- jQuery Library -->
  {!!Html::script('assets/js/jquery-1.11.2.min.js')!!}
  {!!Html::script('assets/js/materialize.js')!!}
  {!!Html::script('assets/js/prism.js')!!}
  {!!Html::script('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')!!}
  {!!Html::script('assets/js/plugins.js')!!}
</body>

</html>
