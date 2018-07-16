@extends('backEnd.layouts.layouts')

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
        
         <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Sistema De Gestão De Reservas Para O Carlitos Hair International UH 

            @if(isset($messagem))
                <a href="{{route('reser.listar')}}"><span class="task-cat pink"><strong>{{$messagem}}</strong></span></a>
            @endif
            </p>
            <div class="divider"></div>
              <div class="row">
                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Número total dos clientes activos</p>
                                        <h4 class="card-stats-number">{{$totalCliente}}</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Número total de reservas marcadas</p>
                                        <h4 class="card-stats-number">{{$totalReservas}}</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i>  <span class="purple-text text-lighten-5"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i>Número total de reservas atendidas</p>
                                        <h4 class="card-stats-number">{{$reservasConfirmadas}}</h4>
                                         <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 
                                        <?php echo ($reservasCanceladas * 100) / $totalReservas ?> % 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Número total de reservas nao atendidas </p>
                                        <h4 class="card-stats-number">{{$reservasCanceladas}}</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 
                                        <?php echo ($reservasConfirmadas * 100) / $totalReservas ?> % 
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
          </div>
        </div>
        
    </section>
    {{-- 
        
        $percentagemCanceladas                  = ($reservasCanceladas * 100) / $$totalReservas;
                $percentagemConfirmadas                 = ($reservasConfirmadas * 100) / $$totalReservas;

                dd($percentagemCanceladas.'%'); --}}
       
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--end container-->
      
      <!-- END CONTENT -->
@stop