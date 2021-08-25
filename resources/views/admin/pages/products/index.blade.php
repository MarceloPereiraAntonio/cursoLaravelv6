@extends('admin.layouts.app')

@section('content')
<h1> </h1>

@endsection


<h1>Exibindo produtos</h1>

@include ('admin.includes.alerts', ['content' => 'Outro alerta'])  {{--Include blade--}}

<hr>

@component('admin.components.card') {{--component blade--}}
    @slot('title') {{-- slot blade--}}
       <h1> Meu titulo</h1>
    @endslot
    Um card de exemplo

@endcomponent




<hr>
@if(isset($products)) {{-- estrutura de controle blade --}}

@foreach ($products as $product) {{-- laços de repetição blade --}}
    <p>{{$product}}</p>
@endforeach
@endif
<hr>

@forelse($products as $product)
    <p>{{$product}}</p>
@empty
    <p>nenhum item encontrado</p> //mensagem de retorno
@endforelse


@push ('scripts') 
    <script>
        document.body.style.background = '#91b765a6'
    </script>
@endpush