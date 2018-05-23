
@extends('FrontEnd.Home.layout')
@section('content')


     <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong> Reservas</strong></h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="#">Reservas</li>
                            <li class="active">Dia</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding ">
            <div class="container">
			    <div align="center">
			        <h1>Data de Serviços X </h1>
			        <p>Caro Cliente x queira por favor escolhe a data que pretender agendar o seu serviço com exceção do domingo</p>
			    </div>

             <div class="row equal-height-row">
                 <div class="col-md-12">
                    <div class="author-wrapper profile white z-depth-1 equal-height-column" style="height: 400px;">

                            <br>
                            <h2 class="text-extrabold text-uppercase no-margin" align="center" >CARLITOS HAIR INTERNATIONAL UH</h2>
                            <br>

                         <hr>
                         <br>
                <div class="col-md-4">
                    {{-- <div class="author-wrapper profile white z-depth-1 equal-height-column" style="height: 250px;"> --}}

                            <br>
                            <h2 class="text-extrabold text-uppercase no-margin" align="center" >Detalhes da Reserva</h2>
                            <br>

                         <div class="divider"></div>
                        <ul class="author-meta mb-30">
                          <li><i class="fa fa-check mr-10"></i><strong>Nome:</strong> {!!Auth::user()->name!!}</li>   
                          <li><i class="fa fa-check mr-10"></i><strong>Serviço:</strong> {!!$servicos->name!!}</li>   
                          <li><i class="fa fa-check mr-10"></i><strong>Preço:</strong> {!!$servicos->valor!!} Mts</li> 

                    {{-- </div> --}}
                </div>

             <div class="col-md-8">
                   {{-- <form name="contact-form" id="contactForm" action="{{route('')}}" method="POST"> --}}
                    <form action="{{route('horario.form', $servicos->id )}}" method="POST" role="form" id="checkout-form">
                      {{ csrf_field() }}
                      @include('FrontEnd.includes.alerts')
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-field">
                            <input type="date" name="data" class="validate" id="name" riquired="true">
                            <input type="text" name="servico" class="hidden" value="{!!$servicos->id!!}" >
                          </div>

                        </div><!-- /.col-md-6 -->

                      </div><!-- /.row -->
                     
                      <button type="submit" name="submit" class="waves-effect waves-light right btn submit-button blue mt-30">Continuar<i class="mdi-hardware-keyboard-arrow-right"></i>
                      </button>
                      
                    </form>
                    <a href="{!!route('reserve.form')!!}" class="waves-effect waves-light btn submit-button red mt-30" ><i class="mdi-hardware-keyboard-arrow-left"></i>Voltar</a>
                </div>
                    </div> <!-- /author-info-wrapper -->
                </div>

                </div>


            </div>
        </section>


@stop