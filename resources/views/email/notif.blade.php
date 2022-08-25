<!DOCTYPE html>
<html>
<head>
    <title>Dokumen kamu sedang diproses</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="color=black">
    <div>
        <h4>Hai {{ $details['pemilik'] }}</h4>
        <p>{{ $details['body'] }}</p>
        <a style="color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        padding:10px;
        border-radius:8px;
        text-decoration:none;
        margin:auto;" class="btn btn-primary" href="{{ url($details['akta'])}}">Download File Disini</a>
        <p>Terima Kasih Sudah Menggunakan Jasa Kami</p>
    </div>
</body>
</html>
