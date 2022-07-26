@extends('template.app')
@section('title', $title)
@section('content')

    <h1 class="mt-4">Usuário {{ $user->name }}</h1>
    <table class="table">
        <thead class="text-center table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">

        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-info">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-primary">Excluir </button>
                    </form>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection