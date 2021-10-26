@extends('admin.layouts.app')

@section('title', 'Editar um produto')

@section('content')



<h1>Editando produto</h1>
    
<form action="{{ route('products.update', $product->id) }}" method="post"  enctype="multipart/form-data" >
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
    <input type="text" name="name" placeholder="Nome:" class="form-control" style="width:500px;" value="{{$product->name}}" >
    </div>

    <div class="form-group mb-3">
    <input type="text" name="description" placeholder="Descrição:" class="form-control" style="width:500px;" value="{{$product->description}}">
    </div>

    <div class="form-group mb-3">
    <input type="number" name="valor" placeholder="Valor do Produto:" class="form-control" style="width:500px;" value="{{$product->valor}}">
    </div>

    <div class="form-group mb-3">
    <input type="file" name="photo" class="form-control" style="width:500px;">
    </div>

    <div class="form-group mb-3">
    <button type="submit" class="btn btn-success" >Atualizar </button>
    <a class="btn btn-primary"  href="{{ route('products.index')}}">voltar</a>
    </div>


</form>
@endsection