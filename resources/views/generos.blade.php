@extends('templetes.templete')
@section('content')

<div class="text">
    <h1> Adicionar Categorias </h1>
</div>

<section class="container">
    <form action="{{url('/genero/inserir')}}" method="post">
    @csrf
        <div>
            <input type="text" placeholder="Categoria..." name="txCategoria">
        </div>

        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>
</section>

<div class="text">
    <h1> Categorias Existentes </h1>
</div>

<section class="container">

    <table class="tabela">

        <tr>
            <td>id</td>
            <td colspan="3" style="text-align: center;">Categoria</td>
        </tr>
        @foreach($categorias as $cat)
        <tr>
            <td>
                {{$cat -> idCategoria}}
            </td>

            <td>
                {{$cat -> categoria}}
            </td>

            <td>
                <a href="/generos-view/{{$cat -> idCategoria}}">Excluir</a>
            </td>
            <td>
                <a href="/genero-editar/{{$cat -> idCategoria}}/editar">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</section>


@endsection