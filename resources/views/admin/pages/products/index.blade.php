@extends('admin.layouts.app')

@section('content')
<h1> </h1>

@endsection

<h1>Exibindo produtos</h1>
@if(isset($products))
@foreach ($products as $product)
    <p>{{$product}}</p>
@endforeach
@endif
<hr>

@forelse($products as $product)
    <p>{{$product}}</p>
@empty
    <p>nenhum item encontrado</p> //mensagem de retorno
@endforelse
