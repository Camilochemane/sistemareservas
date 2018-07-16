
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
                            <li class="active">Reservas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

              <br>
              <br>
    <div class="container">
              
             
              @if(Auth::user()->estado == 'Bloqueado')
              <div align="center">
                  <h1>Cliente Bloqueado </h1>
                 <p>Caro Cliente, o(a) senhor(a) encontra-se bloqueado(a) por excesso de reservas sem confirmações por favor contacte a CARLITOS HAIR INTERNATIONAL UH</p>
              </div>

              @else
              <div align="center">
                  <h1>Serviços Disponíveis </h1>
                  <p>Caro Cliente, queira por favor selecionar o serviço que deseja para a marcação da reserva no nosso salão</p>
              </div>
              @include('FrontEnd.includes.alerts')
              @foreach($servicos->chunk(3) as $serv)

              <div class="row latest-news-card">
                 
                 @foreach($serv as $servico)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                      
                          <div class="border-box" align="center">
                            
                              @if($servico->image !=null)
                                <a class="thumbnail" href="{{route('data.reserva', $servico->id)}}">
                                    <img  style="max-height:200px;" width="350px" src="{{asset('imagens/'.$servico->image)}}" alt="{{ $servico->image }}">
                                </a>
                              @else
                              <a class="thumbnail" href="{{route('data.reserva', $servico->id)}}">
                                <img class="activator" src="assets/img/blog/blog-18.jpg" alt="image">
                              </a>
                            
                          @endif
                        </div>
                        <div class="card-content">
                          <a href="{{route('data.reserva', $servico->id)}}">
                            <h2 align="center">{{$servico->name}}</h2>
                          </a>
                          <p align="center">{{$servico->valor}} Mts</p>
                        </div>
                   
                    </div><!-- /.col-md-4 -->
                  @endforeach
                  
              </div>

            @endforeach

            @endif
             {{$servicos->links()}}
              <br>
              
              
            </div>
              


@endsection