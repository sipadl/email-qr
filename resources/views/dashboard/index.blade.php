@extends('main.index')
@section('title', 'Dashboard')
@section('content')
{{-- Card Atas --}}
<div class="d-flex justify-content-center row">
    <div class="card col-md-4 col-sm-12 text-center mx-2">
        <div class="my-1">
            <h6 class="card-title m-0 p-0">Selesai</h6>
            <hr class="m-2">
            <div class="card-title">
                <h5><i class='bx bx-check-square'></i> {{$berhasil}}</h5>
            </div>
        </div>
    </div>
    <div class="card col-md-4 col-sm-12 text-center mx-2">
        <div class="my-1">
            <h6 class="card-title m-0 p-0">Proses</h6>
            <hr class="m-2">
            <div class="card-title">
                <h5><i class='bx bxs-check-square' ></i> {{$wait}}</h5>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 mt-4">
        <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Pemilik</td>
                    <td>Email</td>
                    <td>Kontak</td>
                    <td>Perusahaan</td>
                    <td>Tanggal Pembuatan</td>
                    <td>Detail</td>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($data as $d)
                <tr class="my-1">
                    <td>{{ $i++ }}</td>
                    <td>{{ $d->pemilik }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->no_telp }}</td>
                    <td>{{ $d->nama_perusahaan }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td> <span class="">Oke</span> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@section('js')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true
    });
} );
</script>
@endsection
@endsection
