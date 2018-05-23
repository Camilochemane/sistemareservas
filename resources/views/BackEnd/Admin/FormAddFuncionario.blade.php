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
                    <li><a href="#">Funcionário</a></li>
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
                <h4 class="header2">Formulário para registar funcionários </h4>
                <div class="row">
                {!!Form::open(['route'=>'form.add', 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form', 'enctype'=>'multipart/form-data'])!!}
                     @include('BackEnd.includes.alerts')
                      {{ csrf_field() }}
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="name" placeholder="Nome">
                        <label for="first_name">Nome*</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text" name="Apelido" placeholder="Apelido">
                        <label for="last_name">Apelido*</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="endereco" placeholder="Av/Rua/Bairro">
                        <label for="first_name">Endereço*</label>
                      </div>
                    
                       <div class="input-field col s6">
                        <input id="phone" type="number" name="telefone" placeholder="+258840000000">
                        <label for="phone">Telefone*</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="email5" type="email" name="email" placeholder="john@domainname.com">
                        <label for="email">Email*</label>
                      </div>
                     <div class="input-field col s3" id="hideUtilizador1">
                        <input id="password6" type="password" autocomplete="new-password" name="password" placeholder="*********" >
                        <label for="password">Password</label>
                      </div>
                    
                      <div class="input-field col s3" id="hideUtilizador2" >
                          <input id="password-again" type="password" autocomplete="new-password" name="password_confirmation" placeholder="*********" >
                          <label for="password-again">Confirmar Password</label>
                        </div>
                      </div>
                     <div class="row">
                      <div class="input-field col s6">
                        <div class="input-field col s6">
                          <p>
                          <input name="sexo" type="radio" id="test2" value="Masculino">
                          <label for="test2">Masculino</label>
                        </p>
                        </div>

                        <div class="input-field col s6">
                       <p>
                          <input name="sexo" type="radio" id="test1" value="Femenino">
                          <label for="test1">Femenino</label>
                        </p>
                         </div>
                        <label for="email">Sexo</label>
                      </div>
                     <div class="input-field col s6" >
                        <select id="type" name="funcao" >
                          <option value="" disabled selected>--Função--</option>
                          @foreach($funcao as $funcao)
                          <option value="{!!$funcao->designacao!!}">{{$funcao->designacao}}</option>
                          @endforeach
                        </select>
                        <label>Função</label>
                      </div>
                     
                    </div>
                  
                      <div class="row">
                      <div class="input-field col s6" id="hideUtilizador3">
                        <select id="type" name="type_id" >
                          <option value="" disabled selected>--Tipo de Utilizador--</option>
                          @foreach($tipo as $tipos)
                          <option value="{!!$tipos->id!!}">{{$tipos->name}}</option>
                          @endforeach
                        </select>
                        <label>Utilizador</label>
                      </div> 
                      
                     <div class="input-field col s6" >
                      <div class="row">          
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Não é utilizador do sistema?</label>
                        </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="file-field input-field col s12">
                        <input class="file-path validate" type="text" name="image"/>
                        <div class="btn">
                          <span>Photo</span>
                          <input type="file" name="image"/>
                        </div>
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
      
      <!-- END CONTENT -->
@stop
