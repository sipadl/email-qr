<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'content' => 'Halaman Home'
        ];
        $qrcode = QrCode::generate('hello');
        return view('main.index', compact('qrcode'));
    }

    public function GenerateQr($url = null)
    {
        $qrcode = QrCode::generate($url ?? 'www.google.com');
        return $qrcode;
    }

    public function SendNota()
    {
        $qrcode = $this->GenerateQr(null);
        $details = [
            'title' => 'Nota',
            'body' => 'Masuk',
            'qrcode' => $qrcode
        ];
        $data = \Mail::to("fadel.mm01@gmail.com")->send(new \App\Mail\Nota($details));
        return response()->json($data, 200);
    }

    public function test(){
        echo 'berhasil';
    }
}
