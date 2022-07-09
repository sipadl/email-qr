<!DOCTYPE html>
<html>
<head>
    <title>Dokumen kamu sedang diproses</title>
</head>
<body style="color=black">
    <div>
        <h4>Hai {{ $details['pemilik'] }}</h4>
        <p>{{ $details['body'] }}</p>
        <img src="{{ $message->embed($images) }}" width="120" height="120" alt="..">
        <p>Terima Kasih Sudah Menggunakan Jasa Kami</p>
    </div>
</body>
</html>
