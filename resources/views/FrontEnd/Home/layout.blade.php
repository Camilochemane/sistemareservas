<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carlitos Hair International UH </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="shortcut icon" href="../assets2/img/CNO-MOZ.jpg">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets2/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets2/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets2/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets2/img/ico/apple-touch-icon-57-precomposed.png">
       {!!Html::style('https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900')!!}
       {!!Html::style('assets2/fonts/iconfont/material-icons.css')!!}
       {!!Html::style('assets2/fonts/font-awesome/css/font-awesome.min.css')!!}
       {!!Html::style('assets2/magnific-popup/magnific-popup.css')!!}
       {!!Html::style('assets2/owl.carousel/assets/owl.carousel.css')!!}
       {!!Html::style('assets2/owl.carousel/assets/owl.theme.default.min.css')!!}
       {!!Html::style('assets2/flexSlider/flexslider.css')!!}
       {!!Html::style('assets2/materialize/css/materialize.min.css')!!}
       {!!Html::style('assets2/bootstrap/css/bootstrap.min.css')!!}
       {!!Html::style('assets2/css/shortcodes/shortcodes.css')!!}
       {!!Html::style('assets2/css/shortcodes/footer.css')!!}
       {!!Html::style('assets2/css/shortcodes/header.css')!!}
       {!!Html::style('assets2/css/style.css')!!}
       {!!Html::style('assets2/revolution/css/settings.css')!!}
       {!!Html::style('assets2/revolution/css/layers.css')!!}
       {!!Html::style('assets2/revolution/css/navigation.css')!!}
       <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      {!!Html::style('assets2/js/plugins/data-tables/css/jquery.dataTables.min.css')!!}




</head>
<body id="top" class="has-header-search">

@include('FrontEnd.Home.navbar')
  
   @yield('content')

@include('FrontEnd.Home.footer')
    

    
    {!!Html::script('assets2/js/jquery-2.1.3.min.js')!!}
    {!!Html::script('assets2/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::script('assets2/materialize/js/materialize.min.js')!!}
    {!!Html::script('assets2/js/menuzord.js')!!}
    {!!Html::script('assets2/js/bootstrap-tabcollapse.min.js')!!}
    {!!Html::script('assets2/js/jquery.easing.min.js')!!}
    {!!Html::script('assets2/js/jquery.sticky.min.js')!!}
    {!!Html::script('assets2/js/smoothscroll.min.js')!!}
    {!!Html::script('assets2/js/imagesloaded.js')!!}
    {!!Html::script('assets2/js/jquery.stellar.min.js')!!}
    {!!Html::script('assets2/js/jquery.inview.min.js')!!}
    {!!Html::script('assets2/js/jquery.shuffle.min.js')!!}
    {!!Html::script('assets2/owl.carousel/owl.carousel.min.js')!!}
    {!!Html::script('assets2/flexSlider/jquery.flexslider-min.js')!!}
    {!!Html::script('assets2/magnific-popup/jquery.magnific-popup.min.js')!!}
    {!!Html::script('assets2/js/scripts.js')!!}
    {!!Html::script('assets2/css/assets/fonts/flaticon/flaticon.css')!!}
   
     

        <!-- RS5.0 Core JS Files -->
        {!!Html::script('assets2/revolution/js/jquery.themepunch.tools.min.js')!!}
        {!!Html::script('assets2/revolution/js/jquery.themepunch.revolution.min.js')!!}

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullwidth",
                    delay:9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "gyges",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[700,600,500,500],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }


                });
            });

            $(document).ready(function () {
                $('#myCarousel').carousel({
                    interval: 10000
                })
                $('.fdi-Carousel .item').each(function () {
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));

                    if (next.next().length > 0) {
                        next.next().children(':first-child').clone().appendTo($(this));
                    }
                    else {
                        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                    }
                });
            });

            $(document).ready(function() {
                $('#Carousel').carousel({
                    interval: 5000
                })
            });
        </script>


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.video.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.slideanims.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.actions.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.layeranimation.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.kenburn.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.navigation.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.migration.min.js')!!}  
       {!!Html::script('assets2/revolution/js/extensions/revolution.extension.parallax.min.js')!!}  
        

</body>
</html>
