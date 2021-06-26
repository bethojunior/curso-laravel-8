@extends('adminlte::page')
@section('content')
    @include('layouts.alert')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Descrição</th>
            <th scope="col">Usuário</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
            <tr>
                <td>{{ $content->title }}</td>
                <td>{{ $content->description }}</td>
                <td>{{ $content->user->name }}</td>
                <td>
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                        </svg>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
