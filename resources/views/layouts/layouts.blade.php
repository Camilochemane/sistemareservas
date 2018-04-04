<!DOCTYPE html>
<html>
<head>
    <title>
    Menu page |
    @yield('title')</title>
    <!-- Favicons-->
  <link rel="icon" href="assent/images/logo-equip.jpg" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="assent/images/logo-equip.jpg">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="assent/images/logo-equip.jpg">

     <!-- CORE CSS-->    
     {!!Html::style('assets/css/materialize.css')!!}
     {!!Html::style('assets/css/style.css')!!}
     {!!Html::style('assets/css/custom/custom.min.css')!!}
     {!!Html::style('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')!!}
     {!!Html::style('assets/js/plugins/jvectormap/jquery-jvectormap.css')!!}
     {!!Html::style('assets/js/plugins/chartist-js/chartist.min.css')!!}

      <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      {!!Html::style('assets/css/prism.css')!!}
      {!!Html::style('assets/js/plugins/data-tables/css/jquery.dataTables.min.css')!!}

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    @yield('styele')


</head>
<body>

    @include('layouts.navbar.navbar')
 <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
    @include('layouts.sidbar.sidbar')

    @yield('content')

        

    </div>
</div>
    @include('layouts.footer.footer')


    {!!Html::script('assets/js/jquery-1.11.2.min.js')!!}
    {!!Html::script('assets/js/materialize.min.js')!!}
    {!!Html::script('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')!!}
    {!!Html::script('assets/js/plugins/chartist-js/chartist.min.js')!!}
    {!!Html::script('assets/js/plugins/chartjs/chart.min.js')!!}
    {!!Html::script('assets/js/plugins/sparkline/jquery.sparkline.min.js')!!}
    {!!Html::script('assets/js/plugins/sparkline/sparkline-script.js')!!}
    {!!Html::script('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('assets/js/plugins/jvectormap/vectormap-script.js')!!}
    {!!Html::script('assets/js/plugins.js')!!}
    {!!Html::script('assets/js/prism.js')!!}
    {!!Html::script('assets/js/plugins/data-tables/js/jquery.dataTables.min.js')!!}
    {!!Html::script('assets/js/plugins/data-tables/data-tables-script.js')!!}
    {!!Html::script('assets/js/plugins.js')!!}
    {!!Html::script('assets/js/custom-script.js')!!}

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    @yield('script')
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 3000);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5500);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 18000);
    });

    
     $(function () {
        $("#type").change(function () {
            if ($(this).val() == 1) {
                $("#dvType").show();
            } else {
                $("#dvType").hide();
            }
        });
    });
    </script>
    

</body>
</html>