@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> MATRIZ PLANIFICACIÓN DE ACCIONES DE CAPACITACIONES</div>
                @if(isset($layout))
                <?<?php $data = explode(".", $layout) ?>
                <div class="panel-heading">{{ ucfirst($data[1]) }}</div>

                <div class="panel-body">

                    @include($layout)
                    
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
