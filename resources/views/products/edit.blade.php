@extends('template.app')
@section('title', "Editar {{$products-name}}")
@section('content')
    <h1>Alterar Produto</h1>



    <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')



        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image" class="form-control" value="{{$products->image}}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Informe o nome do Produto" value="{{$products->name}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Informe uma breve Descrição" value="{{$products->description}}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">categoria</label>
            <input type="text" id="category" name="category" class="form-control" placeholder="Categoria do Produto" value="{{$products->category}}">
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" id="brand" name="brand" class="form-control" placeholder="Marca do produto" value="{{$products->brand}}">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="text" id="brand" name="quantity" class="form-control" placeholder="Qunatidade do produto" value="{{$products->quantity}}">
        </div>

        <div class="mb-3">
            <label for="provider" class="form-label">Fornecedor</label>
            <input type="text" id="provider" name="provider" class="form-control" placeholder="Fornecedor" value="{{$products->provider}}">
        </div>

        <div class="mb-3">
            <label for="data_venc" class="form-label">Data de vencimento</label>
            <input type="text" id="data_venc" name="data_venc" class="form-control" placeholder="Data de vencimento" value="{{$products->data_venc}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="text" id="price" name="price" class="form-control" placeholder="Preço do produto" value="{{$products->price}}">
        </div>

        <div class="mb-3">
            <label for="saleprice" class="form-label">Preço de venda</label>
            <input type="text" id="saleprice" name="saleprice" class="form-control" placeholder="Preço de venda" value="{{$products->saleprice}}">
        </div>

        <button type="submit" class="btn btn-outline-primary col-2">Salvar</button>
        
        
    </form>
@endsection
