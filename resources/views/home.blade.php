@extends('plantilla')
@section('contenido')

@if(isset($op))

@if($op==2)
@include('nosotros')
@endif

@if($op==3)
@livewire('ins-component')
@endif

@if($op==4)
@include('validar')
@endif

@if($op==5)
@include('validaciones.cartadeconducta')
@endif

@if($op==6)
@include('soportecnico')
@endif

@if ($op==7)
@include('restablecerusuario')    
@endif

@if ($op==8)
@include('estadoproceso')    
@endif

@else
@include('inicio')
@endif

@endsection