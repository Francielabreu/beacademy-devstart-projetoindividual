@extends('template.app')
@section('title', 'Cadastrar Produto')
@section('content')
    <h1>Cadastrar novo Produto</h1>



    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Informe o nome do Produto">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Informe uma breve Descrição">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">categoria</label>
            <input type="text" id="category" name="category" class="form-control" placeholder="Categoria do Produto">
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" id="brand" name="brand" class="form-control" placeholder="Marca do produto">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="text" id="brand" name="quantity" class="form-control" placeholder="Qunatidade do produto">
        </div>

        <div class="mb-3">
            <label for="provider" class="form-label">Fornecedor</label>
            <input type="text" id="provider" name="provider" class="form-control" placeholder="Fornecedor">
        </div>

        <div class="mb-3">
            <label for="data_venc" class="form-label">Data de vencimento</label>
            <input type="text" id="data_venc" name="data_venc" class="form-control" placeholder="Data de vencimento">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="text" id="price" name="price" class="form-control" placeholder="Preço do produto">
        </div>

        <div class="mb-3">
            <label for="saleprice" class="form-label">Preço de venda</label>
            <input type="text" id="saleprice" name="saleprice" class="form-control" placeholder="Preço de venda">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
