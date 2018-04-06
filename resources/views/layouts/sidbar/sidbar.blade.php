<aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
              <li class="user-details cyan darken-2">
                  <div class="row">
                      <div class="col col s4 m4 l4">
                          {{ Html::image('assets/images/avatar_1.jpeg', 'a picture', array('class' => 'circle responsive-img valign profile-image')) }}
                      </div>
                      @if (Auth::guest())
                   
                      @else
                           <div class="col col s8 m8 l8">
                              
                               <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                              </li>
                              <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="mdi-hardware-keyboard-tab"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                      </div>
                      @endif

                  </div>
              </li>
              <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-home"></i> Menu</a>
              </li>
               <div class="divider"></div>

              {{-- @if(Auth::user()->type_id== 1) --}}
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person"></i> Utilizadores </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                  <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-home"></i> Reserva </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                  <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                                 {{--  <li><a href="">Edit</a>
                                  </li> --}}
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
              {{-- @elseif(Auth::user()->type_id==2) --}}
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-public"></i> Pagamento </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                  <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                                
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-description"></i> Serviço </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                    <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                                  
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-group"></i> Categoria </a>
                          <div class="collapsible-body">
                              <ul>  
                                  <li><a href="#">Adicionar</a>
                                  </li> 
                                   <div class="divider"></div>                                
                                   <li><a href="#">Listar</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                  </ul>
              </li>
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-group"></i> Preço </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                   <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                  </ul>
              </li>
              <div class="divider"></div>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-group"></i> Relatórios </a>
                          <div class="collapsible-body">
                              <ul>                                      
                                   <li><a href="#">Adicionar</a>
                                  </li>
                                   <div class="divider"></div>
                                   <li><a href="#">Listar</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                  </ul>
              </li>
              <div class="divider"></div>
              {{-- @endif --}}
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->


