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
                            <li class="active">Hora</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding ">
            <div class="container">
            <div class="row equal-height-row">
            <div class="col-md-12">
                 {!!Form::open(['route'=>['actualizar.reserva',$reservaId ], 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form', 'enctype'=>'multipart/form-data'])!!}
                      @include('FrontEnd.includes.alerts')
                      {{ csrf_field() }}
                    <div class="form-group">
                        {!!$horaToda!!}
                        <input type="text" name="data" class="hidden" value="{!!$data!!}" >
                        <input type="text" name="servico_id" class="hidden" value="{!!$servico!!}" >
                    </div>
                    <button type="submit" id="finaliza" class="waves-effect waves-light right btn submit-button blue mt-30">Submeter<i class="mdi-hardware-keyboard-arrow-right"></i></button>
                {{Form::close()}}
            <a href="{!!route('reserve.gerir')!!}" class="waves-effect waves-light btn submit-button red mt-30" ><i class="mdi-hardware-keyboard-arrow-left"></i>Voltar</a>
            </div>
            </div>
            </div>
        </section>
<script type="text/javascript" 
     src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#finaliza').click(function() {
        if (! $("input[type='radio'][name='hora']").is(':checked') ){
          alert("HORA\n Caro cliente Por favor, selecione uma hora.");
          return false;
        }
      });
    }); 
</script>

@stop