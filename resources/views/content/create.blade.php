@extends('adminlte::page')
@section('content')
    @include('layouts.alert')
    <form method="post" class="row col-lg-12 col-sm-12" action="{{ route('content.create') }}">
        @csrf
        @method('POST')
        <div class="form-group col-lg-4">
            <label for="">Titulo</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group col-lg-12">
            <label for="">Descrição</label>
            <textarea class="form-control" name="description" required id="" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-secondary" type="submit">Salvar</button>
    </form>
@endsection
