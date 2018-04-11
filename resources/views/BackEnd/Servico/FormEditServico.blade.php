@extends('backEnd.layouts.layouts')

@section('content')
        
    <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Registar</h5>
                <ol class="breadcrumb">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Serviço</a></li>
                    <li class="active">Registar</li>
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
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
               
                <!-- Form with placeholder -->
               
              </div>
            </div>
          </div>

          <!-- Inline Form -->
          
          </div>
        <!--end container-->
        

        <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Formulario para registar Serviço </h4>
                <div class="row">
                {!!Form::model($servico,['route'=>['servico.actualizar', $servico->id ], 'method' => 'put', 'role' => 'form', 'id' => 'checkout-form'])!!}

                      {{ csrf_field() }}
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="name" value="{!!$servico->name!!}">
                        <label for="first_name">Nome</label>
                      </div>
                       <div class="input-field col s6">
                        <select id="type" name="categoria_id" >
                          <option value="" disabled selected>--Categoria--</option>
                          
                          @foreach($categoria as $cat)
                          <option value="{!!$cat->id!!}">{!!$cat->designacao!!}</option>
                          @endforeach
                        </select>
                        <label>Categoria</label>
                      </div>

                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="descricao" value="{!!$servico->descricao!!}"></textarea>
                        <label for="last_name">Descrição</label>
                      </div>
                    </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan3 waves-effect waves-light right" type="submit" name="action">Gravar
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    
                  {!!Form::close()!!}
                </div>
              </div>
            </div>
          </div>
    </section>
@stop