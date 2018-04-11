@extends('FrontEnd.Home.layout')
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Carlitos Hair International UH</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1 align="center">Sistema De Gestão De Reservas Para O Carlitos Hair International UH</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
