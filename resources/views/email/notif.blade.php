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
        <p>{{ url($details['akta']) }}</p>
        <p>Terima Kasih Sudah Menggunakan Jasa Kami</p>
    </div>
</body>
</html>
