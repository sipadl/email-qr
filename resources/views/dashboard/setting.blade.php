@extends('main.index')
@section('title', 'Pengaturan')
@section('content')
<form method="post" action="{{ route('setting.post', [$data->id]) }}" enctype="multipart/form">
    <div class="form-group row mb-2">
        @csrf
        <label for="exampleInputEmail1" class="col-sm-2 control-label my-1">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $data->name }}">
        </div>
    </div>

    <div class="form-group row mb-2">
        <label for="exampleInputEmail1" class="col-sm-2 control-label my-1">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $data->email }}">
        </div>
    </div>

    <div class="form-group row mb-2">
        <label for="exampleInputEmail1" class="col-sm-2 control-label my-1">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" min="8" name="password"  id="exampleInputEmail1" placeholder="Password">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@stop
