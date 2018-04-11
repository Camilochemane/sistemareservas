<div class="top-bar ">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>carlitos@gmail.com</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i>(258)821320813/843966650 </a>
                  </li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  @guest
                            <li class="mr-20"><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="mr-20">
                                <a>
                                    {{ Auth::user()->name." ".Auth::user()->Apelido }}
                                </a>
                            </li> |
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                        @endguest
                </ul> 
              </div>

              

                 

              
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.top-bar -->

                
        <!--header start-->
        <header id="header" class="tt-nav nav-border-bottom">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="" class=""> {{-- class="logo-brand" --}}
                           {{--  <img class="retina" src="assets/img/com/CNO-MOZ1.jpg" alt=""/> --}}
                           {!!Html::image('')!!}
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li class="active"><a href="">HOME</a>
                            </li>

                            <li ><a href="javascript:void(0)">Reservas<span class="indicator"></span></a>
                                <ul class="dropdown" style="right: 0px; display: none;">
                                    <li class="active"><a href="{!!route('reserve.form')!!}">Agendar</a></li>
                                    <li><a href="contact-us-2.html">Gerir</a></li>
                                </ul>
                            </li>

                            <li><a href="{{route('sobre')}}">Sobre</a>
                            </li>

                            <li><a href="{{route('contacto')}}">Contacto</a>
                            </li>

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>

        </header>
        <!--header end-->

