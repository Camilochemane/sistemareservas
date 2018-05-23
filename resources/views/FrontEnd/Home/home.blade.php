@extends('FrontEnd.Home.layout')
@section('content')

        {{-- <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong> Home </strong></h2>
                        <ol class="breadcrumb">
                            <li class="active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end--> --}}


     <section class="section-padding ">
            <div class="container">

             <div class="row equal-height-row">

               
                 <div class="col-md-8">
                    <div class="author-wrapper profile white z-depth-1 equal-height-column" style="height: 400px;">

                            <br>
                            <h2 class="text-extrabold text-uppercase no-margin" align="center" >CARLITOS HAIR INTERNATIONAL UH</h2>
                            <br>

                         <div class="divider"></div>
                        <span class="available">Available for Freelance Work</span>
                        <ul class="author-meta mb-30">
                            <p><span class="available">Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</span></p>        
                        </ul>
                        <span class="available">
                          
                         <a href="{!!route('reserve.form')!!}"> <button class="btn waves-effect waves-light grey">Agendar reserva</button></a>

                        </span>

                    </div> <!-- /author-info-wrapper -->
                </div>
                <div class="col-md-4">
                    <div class="author-wrapper profile white z-depth-1 equal-height-column" style="height: 400px;">

                            <br>
                            <h2 class="text-extrabold text-uppercase no-margin" align="center" >Horario de Funcionamento</h2>
                            <br>

                         <div class="divider"></div>
                        <span class="available">Excepto feriados e domingos</span>
                        <ul class="author-meta mb-30">
                          
                          <li><i class="fa fa-check mr-10"></i>Segunda</li>   
                          <li><i class="fa fa-check mr-10"></i>Terca</li>   
                          <li><i class="fa fa-check mr-10"></i>Quarta</li>   
                          <li><i class="fa fa-check mr-10"></i>Quinta</li>   
                          <li><i class="fa fa-check mr-10"></i>Sexta</li>   
                          <li><i class="fa fa-check mr-10"></i>Sabado</li>   
                    </div> <!-- /author-info-wrapper -->
                </div>
              </div>
      

            </div><!-- /.container -->
        </section>
        


@stop