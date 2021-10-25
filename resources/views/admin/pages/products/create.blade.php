@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')



<h1>Criando produto</h1>
@include('admin.includes.alerts')
    
<form action="{{ route('products.store') }}" method="post"  enctype="multipart/form-data" >
    @csrf

    <div class="form-group mb-3">
    <input type="text" name="name" placeholder="Nome:" class="form-control" style="width:500px;" >
    </div>

    <div class="form-group mb-3">
    <input type="text" name="description" placeholder="Descrição:" class="form-control" style="width:500px;">
    </div>

    <div class="form-group mb-3">
    <input type="number" name="valor" placeholder="Valor do Produto:" class="form-control" style="width:500px;">
    </div>

    <div class="form-group mb-3">
    <input type="file" name="photo" class="form-control" style="width:500px;">
    </div>

    <div class="form-group mb-3">
    <button type="submit" class="btn btn-primary " >Cadastrar </button>
    </div>


</form>
@endsection