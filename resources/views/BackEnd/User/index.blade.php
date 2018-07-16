@extends('BackEnd.layouts.layouts')

@section('content')
        
    <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Index</h5>
                <ol class="breadcrumb">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Index</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
    </section>
    
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Sistema De Gestão De Reservas Para O Carlitos Hair International UH <a href="{{route('reser.listar')}}"><span class="task-cat pink"><strong>{{$messagem}}</strong></span></a></p>
            <div class="divider"></div>
              <div class="row">
              @include('BackEnd.includes.alerts')
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Numero total dos clientes</p>
                                        <h4 class="card-stats-number">{{$totalCliente}}</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Numero total de reservas</p>
                                        <h4 class="card-stats-number">{{$totalReservas}}</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i>Total number of team</p>
                                        <h4 class="card-stats-number">6</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> <span class="blue-grey-text text-lighten-5">Teams</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total number of</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
          </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--end container-->
      
      <!-- END CONTENT -->
@stop