@extends('template.app')
@section('title', "Listagem dos Produtos")
@section('content')

    <h3 class="pt-3">Listagem do Produto: {{$products->name}}</h3>


    <table class="table text-center" width="100%">
        <thead class="table-primary table-hover">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">IMAGEM</th>
                <th scope="col">NOME</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">MARCA</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">FORNECEDOR</th>
                <th scope="col">DATA VENCIMENTO</th>
                <th scope="col">PREÇO</th>
                <th scope="col">PREÇO DE VENDA</th>
                <th scope="col" colspan="2" >AÇÕES</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{ $products->id }}</th>
                    <td><img src=" {{ asset($products->image) }}" width="50px" height="50px"></td>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->description }}</td>
                    <td>{{ $products->category }}</td>
                    <td>{{ $products->brand }}</td>
                    <td>{{ $products->quantity }}</td>
                    <td>{{ $products->provider }}</td>
                    <td>{{ $products->data_venc }}</td>
                    <td>R$ {{ $products->price }}</td>
                    <td>R$ {{ $products->saleprice }}</td>

                    <td>
                        <a href="{{route('products.edit', $products->id)}}" class="btn btn btn-sm btn-secondary">Editar</a>
                    </td>
                    <td>
                           
                        <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                        </form>
                         
                    </td>
                </tr>
        </tbody>
    </table>

@endsection
