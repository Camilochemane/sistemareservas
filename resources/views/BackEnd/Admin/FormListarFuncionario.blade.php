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
                    <li><a href="#">Funcionario</a></li>
                    <li class="active">Listar</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
  
       <div class="container">
          <div class="section">

            <p class="caption">Sistema De Gestão De Reservas Para O Carlitos Hair International UH</p>
            <div class="divider"></div>
          <div id="table-datatables">
              <h4 class="header">Lista dos funcionarios</h4>
              <div class="row">
                
                  <div id="data-table-simple_wrapper" class="dataTables_wrapper"><table id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 121px;">Nome</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 120px;">Apelido</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">Email</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Função</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76px;">Telefone</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 64px;">Estado</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 320px;">Acção</th></tr>
                    </thead>
                    
                    <tbody>
                      @foreach($user as $users)
            						<tr>
            							<td>{!!$users->name!!} </td>
            							<td>{!!$users->Apelido!!} </td>
            							<td>{!!$users->email!!} </td>
            							<td>{!!$users->funcao!!} </td>
            							<td>{!!$users->telefone!!} </td>
            							  @if($users->estado == 'Activo')

                            <td><span class="task-cat teal"><strong>{!!$users->estado!!}</strong></span></td>
                            
                            @else

                            <td><span class="task-cat pink"><strong>{!!$users->estado!!}</strong></span></td>

                            
                            @endif
                            
                              <td>
                            <a href="" class="btn waves-effect waves-light  teal darken-2">view</a>
                            <a href="{!!route('user.edit',$users->id)!!}" class="btn waves-effect waves-light  yellon darken-2">Edit</a>

                            @if($users->estado== 'Activo')

                            <a href="{!!route('user.block',$users->id)!!}" class="btn waves-effect waves-light  red darken-2">Blok</a>
                             @else

                            <a href="{!!route('user.unlock',$users->id)!!}" class="btn waves-effect waves-light blue">unl</a>
                            
                            @endif
                            </td>
							</tr>
					@endforeach                   
          </tbody>
          </table>
        </div>
                
      </div>
        </div>
          </div>
            </div>
     </section>
   
      
      <!-- END CONTENT -->
@stop

