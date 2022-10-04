<table class="">
    <thead>
        <tr>
            <th>No.</th>
            <th>Pemilik</th>
            <th>Email Perusahaan</th>
            <th>Perusahaan</th>
            <th>Kontak</th>
            <th>Tanggal Pembuatan</th>
            <th>Status</th>
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
            <td> Selesai </td>
        </tr>
        @endforeach
    </tbody>
</table>
