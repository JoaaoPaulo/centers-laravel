@extends('templetes.templete')
@section('content')

<div class="text">
    <h1> Adicionar Produto </h1>
</div>

<section class="container">
    <form action="{{url('/produtos/inserir')}}" method="post">
    @csrf
        <div>
            <input type="text" placeholder="Titulo do produto" name="txTitProd">
        </div>

        <div>
            <input type="text" placeholder="Id Categoria" name="txIdCategoria">
        </div>

        <div>
            <input type="text" placeholder="Descrição do Produto" name="txDescPro">
        </div>

        <div>
            <input type="text" placeholder="Valor do produto" name="txValor">
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

        
        @foreach($produtos as $prod)
        <tr>
            <td>
                {{$prod -> idProd}}
            </td>

            <td>
                {{$prod -> titPro}}
            </td>

            <td>
                {{$prod -> idCategoria}}
            </td>

            <td>
                {{$prod -> descrPro}}
            </td>

            <td>
                {{$prod -> valorPro}}
            </td>

            <td>
                <a href="/produtos-view/{{$prod -> idProd}}">Excluir</a>
            </td>
            <td>
                <a href="/produtos-view/{{$prod -> idProd}}/editar">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</section>


@endsection