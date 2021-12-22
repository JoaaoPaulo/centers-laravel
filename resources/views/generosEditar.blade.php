@extends('templetes.templete')
@section('content')

<div class="text">
    <h1> Alterar Categoria </h1>
</div>

<section class="container">
    <form action="{{url('/genero-alterar/' .$categorias -> idCategoria)}}" method="post">
    {{@csrf_field()}}
        <div>
            <input type="text" placeholder="Digite a Categoria" name="txCategoria" value="{{$categorias -> categoria}}">
        </div>

        <div>
            <input type="submit" value="Editar">
        </div>
    </form>
</section>

@endsection