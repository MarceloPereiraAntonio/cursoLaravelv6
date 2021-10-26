@extends('admin.layouts.app')

@section('content')

<h1>Exibindo produtos</h1>
<a href="{{ route('products.create')}}" class="btn btn-primary">Adicionar novo produto </a>


<br><br>
<table  class="table table-striped">
    <thead>
        <tr>
            <th>nome</th>
            <th>valor</th>
            <th width="100">descrição</th>
            <th width="100">Editar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->valor}}</td>
            <td><a href="{{route('products.show', $product->id )}}">detalhes</a>
            <td><a class="btn btn-warning" href="{{route('products.edit', $product->id)}}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  
</table>
{!! $products->links() !!}










@endsection