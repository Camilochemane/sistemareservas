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
              <div class="row">
              <div class="input-field col s4">
                  <h4 class="header">Lista das serviço</h4>
              </div>
              <div class="input-field col s8">
                       {!!Form::open(['route'=>'categoria.pesquisar', 'method' => 'POST', 'role' => 'form', 'id' => 'checkout-form', 'enctype'=>'multipart/form-data'])!!}
                       <div class="input-field col s4" id="">
                        </div>
                        <div class="input-field col s4" id="" >
                          <input id="name" type="text" autocomplete="new-password" name="name" >
                          <label for="name">Nome do categoria</label>
                          
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
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 240;">Nome</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 400;">Descreicao</th><th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 240px;">Acção</th></tr>
                    </thead>
                    
                    <tbody>
                      @foreach($categoria as $categorias)
                        <tr>
                          <td>{!!$categorias->designacao!!}</td>
                          <td>{!!$categorias->descricao!!} </td>
                            <td>
                              <a href="" class="btn waves-effect waves-light  teal darken-2">Ver</a>
                              <a href="{!!route('cateoria.edit',$categorias->id)!!}" class="btn waves-effect waves-light  yellon darken-2">Editar</a>
                            </td>
                    </tr>
                  @endforeach                   
          </tbody>
          </table>
          @if(isset($dataForm))
          {{$categoria->appends($dataForm)->links()}}
           @else
          {{$categoria->links()}}
          @endif
        </div>
                
      </div>
        </div>
          </div>
            </div>
     </section>
   
      
      <!-- END CONTENT -->
@stop

