@extends('adminlte::page')
@section('content')
    <div class="row col-lg-12 col-sm-12">
        <div class="col-lg-3 form-group">
            <label for="">Nome</label>
            <input readonly class="form-control" type="text" value="{{ $user->name }}">
        </div>
        <div class="col-lg-3 form-group">
            <label for="">Email</label>
            <input readonly class="form-control" type="text" value="{{ $user->email }}">
        </div>
        <div class="col-lg-3 form-group">
            <label for="">Criado</label>
            <input readonly class="form-control" type="text" value="{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}">
        </div>
    </div>
@endsection
