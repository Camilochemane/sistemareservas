
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
    <div align="center">
        <h1>Serviços Disponíveis </h1>
        <p>Caro Cliente x queira por favor selecionar o serviço que deseja para a marcação da reserva no nosso salão</p>
    </div>
              @foreach($servicos->chunk(3) as $serv)

              <div class="row latest-news-card">
                 
                 @foreach($serv as $servicos)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                      <article class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <a href="{{route('data.reserva', $servicos->id)}}"><img class="activator" src="assets/img/blog/blog-18.jpg" alt="image"></a>
                        </div>
                        <div class="card-content">
                          <h2 class="entry-title activator">Why Material Design is our best attempt for a unifying theory…</h2>
                        </div>
                      </article><!-- /.card -->
                    </div><!-- /.col-md-4 -->
                  @endforeach
                  
              </div>
            @endforeach

              <br>
              
            </div>
              


@endsection