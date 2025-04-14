@extends('admin.layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Novo</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
@endsection