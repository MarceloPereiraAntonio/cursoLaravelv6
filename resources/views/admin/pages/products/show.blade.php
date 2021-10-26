@extends('admin.layouts.app')

@section('content')

<h1>Detalhes {{$product->name}}</h1>

<h5>Nome: {{$product->name}}</h5>
<h5>Valor do produto: {{$product->valor}}</h5>
<h5>Descrição: {{$product->description}}</h5>

<form action="{{ route ('products.destroy', $product->id)  }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">Deletar produto</button>
    <a class="btn btn-primary"  href="{{ route('products.index')}}">voltar</a>


</form>

@endsection 