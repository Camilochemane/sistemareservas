
@extends('FrontEnd.Home.layout')
@section('content')
        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong> Sobre nos </strong></h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Sobre nos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->



        <section class="padding-top-90 padding-bottom-70">
            <div class="container">
              <div class="row">
                <div class="col-md-12">

                    <div class="border-bottom-tab">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1"  role="tab" class="waves-effect waves-dark" data-toggle="tab">About us</a></li>
                        <li role="presentation"><a href="#tab-2" role="tab" class="waves-effect waves-dark" data-toggle="tab">What We Do</a></li>
                        <li role="presentation"><a href="#tab-3" role="tab" class="waves-effect waves-dark" data-toggle="tab">Our Mission</a></li>
                        <li role="presentation"><a href="#tab-4" role="tab" class="waves-effect waves-dark" data-toggle="tab">Setps</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="panel-body">
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                                {!!Html::image('assets/img/com/com_04.jpg', 'alt', array('width' => 200))!!}
                              <p> <strong>COM </strong>  
                                        Data de Fundacao 1978
                                        Data de Reconhecimento 1979

                                        Mocambique enviou a sua 1ª equipa olimpica em 1980, nos Jogos Olimpicos de Moscovo, composta por 14 atletas, representando duas modalidades (Natação e Atletismo).  A partir desta data, o pais participou em todos eventos olimpicos seguintes.

                                        Maria de Lurdes Mutola, e a unica atleta mocambicana, que obteve medalhas em evento olimpicos, sendo 01 de Bronze em Atlanta 1996 e 01 de Ouro em     Sidney 2000.
                                        Para Londres 2012, esteve representado por 6 atletas, dos quais so 2 foram qualificados. Os 6 competiram em atletismo, boxe, judo e natação.
                                        </p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                {!!Html::image('assets/img/busy_man.png')!!}

                              <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>

                              <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                {!!Html::image('assets/img/mission.png')!!}

                              <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>

                              <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab-4">
                                {!!Html::image('assets/img/business.png')!!}
                              <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>

                              <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                          </div>
                        </div>
                      </div>

                    </div><!-- /.border-bottom-tab -->

                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


        <hr>


        <section class="section-padding banner-6 bg-fixed parallax-bg overlay light-9" data-stellar-background-ratio="0.5">
            <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Work together</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
              </div>

              <div class="featured-carousel brand-dot">
                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE32A;</i>
                      </div>
                      <div class="desc">
                          <h2>We are creative</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE851;</i>
                      </div>
                      <div class="desc">
                          <h2>We are awesome</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE8AF;</i>
                      </div>
                      <div class="desc">
                          <h2>We are Taltented</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE91D;</i>
                      </div>
                      <div class="desc">
                          <h2>We are secured</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE8CB;</i>
                      </div>
                      <div class="desc">
                          <h2>We are Pationate</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE8DC;</i>
                      </div>
                      <div class="desc">
                          <h2>We are Developer</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE02C;</i>
                      </div>
                      <div class="desc">
                          <h2>We are Designer</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->

                  <div class="featured-item border-box radius-4 hover brand-hover">
                      <div class="icon mb-30">
                          <i class="material-icons brand-icon">&#xE0BE;</i>
                      </div>
                      <div class="desc">
                          <h2>We are Expert</h2>
                          <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                      </div>
                  </div><!-- /.featured-item -->
              </div>

            </div><!-- /.container -->
        </section>

        <hr>



@stop