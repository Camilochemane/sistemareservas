<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;
use App\Service;
use App\Reserve;
use App\User;
use DB;
use Auth;

class ReserveController extends Controller
{
    private $totalPagina = 3;

      public function __construct()
    {
        $this->middleware('auth');
    }


    public function getReserva()
    {
    	$servicos            = DB::table('services')
                                      ->join('prices', 'services.id', '=', 'prices.servico_id')
                                        ->orderByRaw('categoria_id ASC')->paginate(6);
    	return view('FrontEnd.Home.Reserva.FormReserva', ['servicos' => $servicos]);
    }

    public function getGerirreserva()
    {
        $reservas           = Reserve::where('user_id', '=', Auth::user()->id)->orderByRaw('data DESC')->paginate($this->totalPagina);
        $dataAtual          = date('Y-m-d H:i:s');

      $reservasExpiradas    = Reserve::where('data', '<' ,$dataAtual)->get();

      foreach ($reservasExpiradas as $expiradas) {
          
          $expiradas->estado = "Expirado";
          $expiradas->update();
      }
    	return view('FrontEnd.Home.Reserva.GerirReseva', ['reservas' => $reservas]);
    }

    public function escolherDatareserva($id)
    {  
        $servicos = DB::table('prices')
                            ->join('services', 'prices.servico_id', '=',  'services.id')
                            ->where('servico_id', '=', $id)
                            ->first();
        if($servicos){
            return view('FrontEnd.Home.Reserva.DiaReserva', ['servicos' => $servicos]);
        }else{
          return redirect()->back()->with('error', 'O servico escolhido nao possue preco');
        }

    }

    public function horario(Request $request)
    {   
        $dataForm           = $request->all();
        $dataAtual          = date('Y-m-d');
        // $dataActualArray    = explode('-',$dataAtual);
        $dataFormArray      = explode('-',$dataForm['data']);

        // $jdActual= gregoriantojd($dataActualArray[1],$dataActualArray[2],$dataActualArray[0]);
        // dd(jddayofweek($jdActual,1));
        if(isset($dataForm['data'])){
        $jdForm = gregoriantojd($dataFormArray[1],$dataFormArray[2],$dataFormArray[0]);
        $diaDasemanaDomingo = jddayofweek($jdForm,1);
         // dd($diaDasemanaDomingo);
                if($dataForm['data'] < $dataAtual){
                    return redirect()
                                    ->back()
                                    ->with('error', ' caro cliente por favor escolha uma data valida');   
                
                }elseif ($diaDasemanaDomingo == "Sunday") {
                    return redirect()
                                    ->back()
                                    ->with('error', ' caro cliente por favor escolhe uma data com o dia da semana diferente de domingo');   
                
                }else{

                $horaInicio       = "08:00:00";
                $horaFeicho       = "18:00:00";

                $horaInicioArray  = explode(':', $horaInicio);
                $horaFeichoArray  = explode(':', $horaFeicho);
                $horaToda         = "";
                $i                =1;
                    while ( $horaInicioArray[0]< $horaFeichoArray[0]) {
                     $horaToda = $horaToda.'<div class="col-md-4">
                     <p>
                       <input type="radio" name="hora" id="test'.$i.'" value="'.$horaInicioArray[0]. ':' .$horaInicioArray[1].':'.$horaInicioArray[2].'
                           "> 
                           <label for="test'.$i.'">'.$horaInicioArray[0].  ' : '  .$horaInicioArray[1].'
                      </label>
                  </p>
                  </div>';

                    if ($horaInicioArray[1] == 30) {
                      
                      $horaInicioArray[0] += 1;
                      $horaInicioArray[1] = 00;
                    }elseif($horaInicioArray[1] == 00){

                      $horaInicioArray[0] = $horaInicioArray[0];
                      $horaInicioArray[1] += 30; 
                    }
                    $i++;
                  }
                    $data     = $dataForm['data'];
                    $servico  = $dataForm['servico'];
                    return view('FrontEnd.Home.Reserva.HorarioReserva', ['horaToda' => $horaToda, 'data'=> $data, 'servico' => $servico]);
               
                }

        }else{
            return redirect()
                        ->back()
                        ->with('error', 'Nao prencheu o campo data');
        }

    }

    public function submeterReserva(ReserveRequest $request)
    {
        $data               = new Reserve($request->all());
        $dataHora           = $data['data'].' '.$data['hora'];
        $reservas           = Reserve::where('data', '=', $dataHora)->first();
        $data['user_id']    = Auth::user()->id;
        $data['estado']     = 'Pendente';
        $data['data']       = $dataHora ;

        if ($reservas) {

                if($reservas->servico_id == $data['servico_id']){
                    return redirect()
                            ->route('data.reserva',$data['servico_id'])
                            ->with('error', 
                                'Caro clinte por favor escolha uma outra data
                                 ou uma outra hora pois essa ja se encontra ocupada');
                }else{
                
                 $save               = $data->save();
                 return redirect()
                         ->route('reserve.gerir')
                         ->with('success', 'Agendado com sucesso');
                }
        }else{
            $save               = $data->save();
            return redirect()
                        ->route('reserve.gerir')
                        ->with('success', 'Agendado com sucesso');

        }
    }


    public function editarescolherDatareserva($id)
    {
        $reservas = Reserve::find($id);
        $servicos = DB::table('prices')
                            ->join('services', 'prices.servico_id', '=',  'services.id')
                            ->where('servico_id', '=', $reservas->servico_id)
                            ->first();

        return view('FrontEnd.Home.Reserva.Editar.EditarDiaReserva', ['reservas' => $reservas, 'servicos' => $servicos]);
    }

public function editarHorario(Request $request)
{
        $dataForm           = $request->all();
        $dataAtual          = date('Y-m-d');
        // $dataActualArray    = explode('-',$dataAtual);
        $dataFormArray      = explode('-',$dataForm['data']);

        // $jdActual= gregoriantojd($dataActualArray[1],$dataActualArray[2],$dataActualArray[0]);
        // dd(jddayofweek($jdActual,1));
        if(isset($dataForm['data'])){
        $jdForm = gregoriantojd($dataFormArray[1],$dataFormArray[2],$dataFormArray[0]);
        $diaDasemanaDomingo = jddayofweek($jdForm,1);
         // dd($diaDasemanaDomingo);
                if($dataForm['data'] < $dataAtual){
                    return redirect()
                                    ->back()
                                    ->with('error', ' caro cliente por favor escolha uma data valida');   
                
                }elseif ($diaDasemanaDomingo == "Sunday") {
                    return redirect()
                                    ->back()
                                    ->with('error', ' caro cliente por favor escolhe uma data com o dia da semana diferente de domingo');   
                
                }else{

                $horaInicio       = "08:00:00";
                $horaFeicho       = "18:00:00";

                $horaInicioArray  = explode(':', $horaInicio);
                $horaFeichoArray  = explode(':', $horaFeicho);
                $horaToda         = "";
                $i                =1;
                    while ( $horaInicioArray[0]< $horaFeichoArray[0]) {
                     $horaToda = $horaToda.'<div class="col-md-4">
                     <p>
                       <input type="radio" name="hora" id="test'.$i.'" value="'.$horaInicioArray[0]. ':' .$horaInicioArray[1].':'.$horaInicioArray[2].'
                           "> 
                           <label for="test'.$i.'">'.$horaInicioArray[0].  ' : '  .$horaInicioArray[1].'
                      </label>
                  </p>
                  </div>';

                    if ($horaInicioArray[1] == 30) {
                      
                      $horaInicioArray[0] += 1;
                      $horaInicioArray[1] = 00;
                    }elseif($horaInicioArray[1] == 00){

                      $horaInicioArray[0] = $horaInicioArray[0];
                      $horaInicioArray[1] += 30; 
                    }
                    $i++;
                  }
                    $data = $dataForm['data'];
                    $reservaId = $dataForm['reserva'];
                    $servico = $dataForm['servico'];
                    return view('FrontEnd.Home.Reserva.Editar.EditarHorarioReserva', ['horaToda' => $horaToda,
                    'data'=> $data, 'servico' => $servico, 'reservaId' => $reservaId]);
               
                }

        }else{
            return redirect()
                        ->back()
                        ->with('error', 'Nao prencheu o campo data');
        }
}


public function atualizarReserva(ReserveRequest $request, $id)
{
        $data               = new Reserve($request->all());
        $dataAtualizar      =  Reserve::find($id);

        $dataHora           = $data['data'].' '.$data['hora'];
        $reservas           = Reserve::where('data', '=', $dataHora)
                                    ->where('id', '<>', $id)
                                   ->first();
        $dataAtualizar['data']       = $dataHora ;


        if ($reservas) {

                if($reservas->servico_id == $data['servico_id']){
                    return redirect()
                            ->route('editar.reserva',$id)
                            ->with('error', 
                                'Caro clinte por favor escolha uma outra data
                                 ou uma outra hora pois essa ja se encontra ocupada');
                }else{
                
                 $dataAtualizar->update();
                 return redirect()
                         ->route('reserve.gerir')
                         ->with('success', 'Actualizado com sucesso');
                }
        }else{
            $dataAtualizar->update();
            return redirect()
                        ->route('reserve.gerir')
                        ->with('success', 'Actualizado com sucesso');

        }
}
// lista de reservas para backend
public function listarReservas()
{
      $reservas          = Reserve::orderByRaw('data DESC')->paginate($this->totalPagina);
      $dataAtual         = date('Y-m-d H:i:s');
      $user              = User::where('users.type_id', '=', 3)->get();

      $reservasExpiradas = Reserve::where('data', '<' ,$dataAtual)->get();

      foreach ($reservasExpiradas as $expiradas) {
          
          $expiradas->estado = "Expirado";
          $expiradas->update();
      }

      return view('BackEnd.Reserva.Listar', ['reservas' => $reservas, 'user' => $user]);
}


public function confirmarReserva($id)
{
  $reservas                 = Reserve::find($id);
  $reservas->funcionario    = Auth::user()->name;
  $reservas->estado         = "Confirmado";
  $reservas->update();

  return redirect()->route('reser.listar');
}

public function atenderReserva($id)
{ 
  $reservas                   = Reserve::find($id);
  $reservas->funcionario      = Auth::user()->name;
  $reservas->estado           = "Atendida";
  $reservas->update();
  
  return redirect()->route('reser.listar'); 
}


public function reservaPesquisa(Request $request, Reserve $reservas)
{
        $dataForm             = $request->except('_token');
        $reservas             = $reservas->pesquisar($dataForm, $this->totalPagina);
        $user                 = User::where('users.type_id', '=', 3)->get();

        return view('BackEnd.Reserva.Listar', ['reservas' => $reservas, 'dataForm' => $dataForm, 'user' => $user]);
}

public function relatorioTodasreservas()
{
        $reservas = Reserve::all();
        $view     = view('BackEnd.Relatorios.TodasReservas', compact('reservas'));
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reservas');
}

public function cancelarReserva($id)
{
  $reservas             = Reserve::find($id);
  $reservas->estado     = 'Cancelado';
  $reservas->update();

    return redirect()
                ->back()->with('success', 'Reserva Cancelada com sucesso');
}


public function DetalhesReserva($id)
{
  
  return view('BackEnd.Reserva.DetalhesReserva');
}

}