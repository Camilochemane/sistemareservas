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
                    <li><a href="#">Categoria</a></li>
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
                <h4 class="header2">Formulario para registar Categoria </h4>
                <div class="row">
                {!!Form::open(['route'=>'categoria.save', 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form'])!!}

                      {{ csrf_field() }}
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="first_name" type="text" name="designacao">
                        <label for="first_name">Nome</label>
                      </div>
                    
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="descricao"></textarea>
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