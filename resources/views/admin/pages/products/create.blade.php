@extends('admin.layouts.app')


@section('content')

@section('title', 'Cadastrar novo produto')

<h1>Criando produto</h1>

    <input type="text" name="name" placeholder="Nome:">
<form action="{{ route('products.store') }}" method="post"  enctype="multipart/form-data" >
    
    @csrf
    <input type="text" name="description" placeholder="Descrição:">
    <input type="file" name="photo">
    <button type="submit">Envaeeea </button>


</form>
@endsection