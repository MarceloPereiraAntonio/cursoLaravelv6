@extends('admin.layouts.app')

@section('content')

<h1>Detalhes {{$product->name}}</h1>

<h5>Nome: {{$product->name}}</h5>
<h5>Valor do produto: {{$product->valor}}</h5>
<h5>Descrição: {{$product->description}}</h5>

@endsection 