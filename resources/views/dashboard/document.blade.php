@extends('main.index')
@section('title', 'Dokumen')
@section('content')
<div class="row">
    <div class="col-md-12 text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Dokumen
        </button>
    </div>
    <div class="col-md-12 col-sm-12 mt-4">
        <table class="table table-responsive" id="myTable">
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
                    <td>
                        <a href="javascript;:" class="badge badge-pill bg-info text-light" onclick="klikdisini({{$d->id}});" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#changeStatus">
                            Upload Akta
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

    function klikdisini(i)
    {
        $.get(`/dokumen/${i}`, {},
            function (data) {
                 $('#pemilik').val(data.pemilik)
                 $('#id').val(data.id)
                 $('#no_telp').val(data.no_telp)
                 $('#ktp').val(data.ktp)
                 $('#nama_perusahaan').val(data.nama_perusahaan)
                 $('#email').val(data.email)
                 $('#alamat_perusahaan').val(data.alamat_perusahaan)
            },
        );
    }
</script>
@include('main.modal.dokumen')
@include('main.modal.changeStatus')
@endsection
