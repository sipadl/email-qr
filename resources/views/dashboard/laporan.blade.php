@extends('main.index')
@section('title', 'Laporan')
@section('content')
<div class="">
    <form action="{{ route('cetak.laporan') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-info text-light">Print Laporan Bulan ini</button>
    </form>
</div>
@stop
