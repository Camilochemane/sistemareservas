@extends('backEnd.layouts.layouts')

@section('content')
        
    <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Listar</h5>
                <ol class="breadcrumb">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Reservas</a></li>
                    <li class="active">Listar</li>
                    {{-- <a href="{{route('relatorio.reservas')}}" class="btn" align="right">Imprimir</a> --}}
                </ol>
              </div>
            </div>
          </div>
        </div>
  
       <div class="container">
          <div class="section">
              <div class="row">
                 
                      <p class="caption">Sistema De Gestão De Reservas Para O Carlitos Hair International UH</p>
                  
                         
                 
              </div>
            
            <div class="divider"></div>
          <div id="table-datatables">
            <div class="row">
              <div class="input-field col s4">
                  <h4 class="header">Lista das reservas</h4>
              </div>
              <div class="input-field col s8">
                       {!!Form::open(['route'=>'reserva.pesquisar', 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form', 'enctype'=>'multipart/form-data'])!!}
                        <div class="input-field col s4" id="" >
                          <input id="name" type="text"  name="name" >
                          <label for="name">Nome do cliente</label>
                        </div>
                        <div class="input-field col s4" id="" >
                          <input id="name" type="date"  name="data" >
                          
                        </div>
                        <div class="input-field col s4">
                          <button class="btn waves-effect waves-light blue" type="submit" name="action">pesquisar
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                    {{Form::close()}}
              </div>
            </div>
              <div class="row">
                
                  <div id="data-table-simple_wrapper" class="dataTables_wrapper"><table id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 121px;">Cliente</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 120px;">Serviço</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">Profissional</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Dia/Hora</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 64px;">Estado</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 320px;">Acção</th></tr>
                    </thead>
                    
                    <tbody>
                       @foreach($reservas as $reserva)
            						<tr>
            							<td>{!!$reserva->users->name!!} </td>
            							<td>{!!$reserva->servicos->name!!} </td>
                          <td>
            						  @if($reserva->funcionario)
                        	{!!$reserva->funcionario!!} 
                          @else
                            _________
            						  @endif
                          </td>
                        	<td>{!!$reserva->data!!} </td>
            							
            							  @if($reserva->estado == 'Confirmar')
                            <td><span class="task-cat teal"><strong>{!!$reserva->estado!!}</strong></span></td>
                            @else
                            <td><span class="task-cat pink"><strong>{!!$reserva->estado!!}</strong></span></td>
                            @endif
                            
                            <td>
                              @if($reserva->estado == 'Expirado')
                                  <a href="#" class="btn waves-effect waves-light  teal darken-2">ver</a>
                              @else
                                  <a href="{{route('reseva.confirmar', $reserva->id)}}" class="btn waves-effect waves-light blue">Confirmar</a>
                                  <a href="{{route('reseva.confirmar', $reserva->id)}}" class="btn waves-effect waves-light green>">Atender</a>
                              @endif
                            </td>
							     </tr>
      					@endforeach                   
                </tbody>
                </table>
                {{$reservas->links()}}
                
        </div>
                
      </div>
        </div>
          </div>
            </div>
     </section>
   
      
      <!-- END CONTENT -->
@stop

