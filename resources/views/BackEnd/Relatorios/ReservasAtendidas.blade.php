<!DOCTYPE html>
<html>
<head>
    <title>Relatorio de todas as reservas</title>
    
</head>
<body>  
    <div class="login-header login-caret">
           <div class="row">
                <div class="col s12 m8 l9">
                 
                </div>
                <div class="col s12 m4 l3">
                 <div>Av. 24 de Julho</div>
                 <div>(+258)21 310 693</div>
                 <div>http://www.carlitoshair.co.mz/</div>
                 <div>info@carlitoshair.co.mz</div>
                </div>
              </div>
            <div class="login-content" align="center">
             <a href="#" class="logo">
                <img src="assets/images/AT.jpg" width="120" alt="" />
            </a>  
            <h3>Republica de Moçambique</h3>
            <h3>Autoridade Tributaria de Moçambique</h3>
           </div> 
    </div>

    <br>
    
    <div class="row" align="left">Expediente nº: AT<?php echo date('ymd/s')?>
    <P>Nome do Expediente</P>
    <P>Estado do Expediente</P>
    <P>Nome do Contribuente</P>
    </div>
    <div class="row" align="right"><p><strong>Maputo <?php echo date('Y-m-d H:i:s') ?></strong></p></div>
   
    <hr>
    
    <div class="row">
                  <table class="striped">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="table-4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Nome do Processo</th><th class="sorting" tabindex="0" aria-controls="table-4" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Data prevista para o termino</th><th class="sorting" tabindex="0" aria-controls="table-4" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 153px;">Estado</th></tr>
                </thead>
                    <tbody>
                
                        <tr>
                            <td>Total</td>
                            <td></td>
                            
                        </tr>
                </tbody>
                  </table>
    </div>
    <br>
    <br>
    <br>

        <div class="row" align="center"> 
        <p>_________________________________________________</p>
        <p>{{ Auth::user()->name }}</p>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <hr>
        <p align="center">Sistema de Notificação Electronica, todos direitos reservados at-mozambique</p>

</body>
</html>