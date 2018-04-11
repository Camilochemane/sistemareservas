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
                    <li><a href="#">Funcionario</a></li>
                    <li class="active">Registar</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
    </section>
    
        

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
                <h4 class="header2">Formulario para registar funcionario </h4>
                <div class="row">
                {!!Form::open(['route'=>'form.add', 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form'])!!}

                      {{ csrf_field() }}
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="name">
                        <label for="first_name">Nome</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text" name="Apelido">
                        <label for="last_name">Apelido</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="email5" type="email" name="email">
                        <label for="email">Email</label>
                      </div>
                     <div class="input-field col s3">
                        <input id="password6" type="password" autocomplete="new-password" name="password" >
                        <label for="password">Password</label>
                      </div>
                    
                      <div class="input-field col s3">
                          <input id="password6" type="password" autocomplete="new-password" >
                          <label for="password">Confirmar Password</label>
                        </div>
                      </div>
                     <div class="row">
                      <div class="input-field col s6">
                        <div class="input-field col s6">
                          <p>
                          <input name="sexo" type="radio" id="test2">
                          <label for="test2">Masculino</label>
                        </p>
                        </div>

                        <div class="input-field col s6">
                       <p>
                          <input name="sexo" type="radio" id="test1">
                          <label for="test1">Femenino</label>
                        </p>
                         </div>
                        <label for="email">Sexo</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="phone" type="number" name="telefone">
                        <label for="phone">Telefone</label>
                      </div>
                     
                    </div>
                  
                      <div class="row">
                      <div class="input-field col s6">
                        <select id="type" name="type" >
                          <option value="" disabled selected>--Tipo de Utilizador--</option>
                          <option value="0">Administrador</option>
                          <option value="1">Funcionario</option>
                          <option value="2">Supervisor</option>
                        </select>
                        <label>Utilizador</label>
                      </div> 
                      
                     <div class="input-field col s6">
                        <input id="descricao" type="text" class="" name="descricao">
                        <label for="dataNasc">Descrição</label>
                      </div>
                    </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan3 waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    
                  {!!Form::close()!!}
                </div>
              </div>
            </div>
          </div>
      
      <!-- END CONTENT -->
@stop
