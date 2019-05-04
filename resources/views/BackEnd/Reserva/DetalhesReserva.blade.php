@extends('backEnd.layouts.layouts')

@section('content')
        
    <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Detalhes</h5>
                <ol class="breadcrumb">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Detalhes</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
         <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Sistema De Gestão De Reservas Para O Carlitos Hair International UH</p>
            <div class="divider"></div>
             <br>
           
	            <div class="row">
                   
                    <div class="col s12">
                      <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                          <div class="col s4 m2">
                            {{-- <img src="../assets/images/avatar.jpg" alt="" class="circle responsive-img valign"> --}}
                            {!!Html::image('assets/images/avatar.jpg', 'alt', array('class' => 'circle responsive-img valign' ))!!}
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <a href="{{route('voltar.listaRezervas')}}" class="waves-effect waves-light btn submit-button red mt-30" ><i class="mdi-hardware-keyboard-arrow-left"></i>Voltar</a>
                          </div>
                          <div class="col s8 m10">
                            <h2 align="center"><span class="black-text" >Detalhes da Reserva</span></h2>
                             <div class="input-field col s2">
                             </div>
                            <div class="input-field col s5">
	                            <p><strong>Nome do Cliente:</strong> &nbsp;&nbsp;{{$user->name.' '.$user->Apelido}}</p>
	                            <p><strong>Telefone:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->telefone}}   </p>
	                            <p><strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->email}}   </p>
                           	</div>
                           	<div class="input-field col s5"> 
                           		<p><strong>Reserva:</strong>&nbsp;&nbsp; {{$reserva->servicos->name}}  </p>
	                            <p><strong>Data:</strong>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$reserva->data}} </p>
	                            <p><strong>Estado:</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$reserva->estado}}</p>
                           	</div>

                        @if($reserva->estado == 'Expirado')
                           	
                        @else
                          <a href="#" class="waves-effect waves-light right btn submit-button blue mt-30">Atender<i class="mdi-hardware-keyboard-arrow-right"></i>
                        </a>
                        @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
        
    </section>
    
        <!--end container-->
      
      <!-- END CONTENT -->
@stop