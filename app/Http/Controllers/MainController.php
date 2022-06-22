<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Mailjet\LaravelMailjet\Facades\Mailjet;


class MainController extends Controller
{
    public function index()
    {
        $path = ('assets/'.time());
        $qrcode = QrCode::format('png')->generate($url ?? 'www.google.com', $path);
        return view('main.index', compact('path'));
    }

    public function GenerateQr($url = null)
    {
        $path = ('assets/'.time());
        QrCode::generate($url ?? 'www.google.com', $path);
        return $path;
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



}
