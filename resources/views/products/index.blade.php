@extends('template.app')
@section('title', "Listagem dos produtos")
@section('content')

@section('content')
    <h3 class="pt-3">Listagem dos Produtos</h3>


    <table class="table">
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
            <th scope="col">AÇÕES</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $dataProduct)
          <tr>
            <th scope="row">{{ $dataProduct->id }}</th>
            <td><img src=" {{ asset($dataProduct->image) }}" width="50px" height="50px"></td>
            <td>{{ $dataProduct->name }}</td>
            <td>{{ $dataProduct->description }}</td>
            <td>{{ $dataProduct->category }}</td>
            <td>{{ $dataProduct->brand }}</td>
            <td>{{ $dataProduct->quantity }}</td>
            <td>{{ $dataProduct->provider }}</td>
            <td>{{ $dataProduct->data_venc }}</td>
            <td>R$ {{ $dataProduct->price }}</td>
            <td>R$ {{ $dataProduct->saleprice }}</td>

            <td>
                <a href="{{ route('products.show',$dataProduct->id) }}"
                    class="btn btn-sm btn-primary">Visualizar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
 
@endsection