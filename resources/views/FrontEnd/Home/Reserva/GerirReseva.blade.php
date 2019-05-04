
@extends('FrontEnd.Home.layout')
@section('content')

          <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong> Reservas</strong></h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gerir</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

<section id="schedule" class="section-padding">
      <div class="container">
      	    @if(Auth::user()->estado == 'Bloqueado')
              <div align="center">
                  <h1>Cliente Bloqueado </h1>
                 <p>Caro Cliente, o(a) senhor(a) encontra-se bloqueado(a) por excesso de reservas sem confirmações por favor contacte a CARLITOS HAIR INTERNATIONAL UH</p>
              </div>

              @else

              <div class="text-center mb-80 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                  <h2 class="section-title text-uppercase">Reservas Marcadas pelo cliente {{Auth::user()->name}}</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="border-tab transparent-nav event-schedule">
                      
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="day-4">
                      		@include('FrontEnd.includes.alerts')
							<div class="table-responsive">
		                        <table class="table">
		                            <thead>
		                            <tr>
		                                <th>#</th>
		                                <th>Serviço</th>
		                                <th>Profissional</th>
		                                <th>Dia/Hora</th>
		                                <th>Estado</th>
		                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 390px;">Acção</th>
		                            </tr>
		                            </thead>
		                            <tbody>
		                            @foreach($reservas as $reserva)
		                            <tr>
		                                <td>{{$reserva->id}}</td>
		                                <td>{{$reserva->servicos->name}}</td>
		                                <td>
		                                @if($reserva->funcionario)
		                                {{$reserva->funcionario}}
		                                @else
		                                	_____
		                                @endif
		                                </td>
		                                <td>{{$reserva->data}}</td>
		                                <td>{{$reserva->estado}}</td>
		                                <td> 
		                                @if($reserva->estado != 'Expirado' && $reserva->estado != 'Cancelado')
		                                	<a href="#" class="btn waves-effect waves-light green">Confirmar</a>
		                                	<a href="{{route('editar.reserva', $reserva->id)}}" class="btn waves-effect waves-light blue">Editar</a>
											<a href="{{route('reserva.concelar', $reserva->id)}}" class="btn waves-effect waves-light  red darken-2">Cancelar</a>
										@else
											<a href="#" class="btn disabled">Confirmar</a>
		                                	<a href="#" class="btn disabled">Editar</a>
											<a href="#" class="btn disabled">Cancelar</a>
										@endif
                            			</td>
		                            </tr>
		                            @endforeach
		                            </tbody>
		                        </table>
		                        {{$reservas->links()}}
	                        </div>

                          </div>
                        </div>
                     
                    </div><!-- /.border-bottom-tab -->
                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
              @endif
            </div><!-- /.container -->
        </section>
 @stop 