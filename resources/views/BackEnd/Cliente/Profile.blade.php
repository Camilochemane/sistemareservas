@extends('backEnd.layouts.layouts')

@section('content')
        
    <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Perfil</h5>
                <ol class="breadcrumb">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Perfil</li>
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
             
            	<div id="card-widgets" class="seaction">
              <div class="row">

                <div class="col s10 m10 l4">
                  <h4 class="header">Perfil </h4>
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
              
                    {!!Html::image('assets/images/user-bg.jpg')!!}

                    </div>

                    <div class="card-content">
                         {!!Html::image('assets/images/avatar.jpg', 'alt', array('class' => 'circle responsive-img activator card-profile-image' ))!!}
                      
                      <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-editor-mode-edit"></i>
                      </a>



                      <span class="card-title activator grey-text text-darken-4">{!!$user->name.''.' '.$user->Apelido!!}</span>
                      <p><i class="mdi-action-perm-identity"></i>  {!!$user->estado!!}</p>
                      {{-- <p><i class="mdi-action-perm-identity"></i>  {!!$user->type->name!!}</p> --}}
                      <p><i class="mdi-action-perm-phone-msg"></i> {!!$user->telefone!!}</p>
                      <p><i class="mdi-communication-email"></i>   {!!$user->email!!}</p>

                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">{!!$user->name.''.' '.$user->Apelido!!}<i class="mdi-navigation-close right"></i></span>
                      <p>Encontre aqui algumas informações desse utiliazador</p>

                      <p> <strong>Tipo de utilizador: </strong>  {!!$user->type->name!!}</p>
                      <p> <strong>Total de reservas: </strong> {!!$reservasTotal!!}</p>
                      <p>  <strong>Total de reservas confirmadas: </strong> {!!$reservasConfirmadas!!}</p>
                      <p>  <strong>Total de reservas expiradas: </strong> {!!$reservasExpiradas!!}</p>
                      <p><strong>Total de reservas canceladas: </strong> {!!$reservasCanceladas!!}</p>
                    </div>
                  </div>
                </div>

                 <div class="col s14 m14 l8">
                  <h4 class="header">Reservas do cliente {!!$user->name.''.' '.$user->Apelido!!}</h4>
                  <ul id="projects-collection" class="collection">
                    <li class="collection-item avatar">
                      <i class="mdi-file-folder circle light-blue"></i>
                      <span class="collection-header">Reservas</span>
                      {{-- <p>Your Favorites</p> --}}
                      <a href="#" class="secondary-content">Estado da reserva</a>
                    </li>

                   @foreach($reservas as $reser)

                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">{!!$reser->servicos->name!!}</p>
                        </div>
                        <div class="col s3">
                          <p class="collections-content">{!!$reser->data!!}</p>
                        </div>
                        <div class="col s3">
                          <p>{!!$reser->estado!!}</p>                                                
                        </div>
                      </div>
                    </li>

                    @endforeach
                    
                  </ul>
                </div>

              </div>
              
              
            </div>
          </div>
        </div>
        
    </section>
    
        <!--end container-->
      
      <!-- END CONTENT -->
@stop