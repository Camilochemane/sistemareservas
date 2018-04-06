


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
  <title>Register Page | Carlitos Hair International UH</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
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
         <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Registar</h4>
            <p class="center">Crie uma conta!</p>
          </div>
        </div>

        <div class="row margin{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus >
            <label for="username" class="center-align">Name</label>
             @if($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="row margin{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            <label for="email" class="center-align">Email</label>
             @if($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="row margin{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
            @if($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="password_confirmation" required>
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button href="index.html" class="btn waves-effect waves-light col s12">Registar agora</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Ja possui uma conta? <a href="{{route('login')}}">Login</a></p>
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