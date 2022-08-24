<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use Hash;

use Model\Transanski;
use Model\User;
use Auth;
use DB;

class MainController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $berhasil = DB::table('perusahaans')->where('status', 3)->count();
        $wait = DB::table('perusahaans')->where('status', 1)->count();
        $data = DB::table('perusahaans')->get();

        return view('dashboard.index', compact('berhasil', 'wait', 'data'));
    }

    public function GenerateQr($url = null)
    {
        $path = 'assets/'.time().'.png';
        QrCode::format('png')->generate($url ?? 'www.google.com', $path);


        return $path;
    }

    public function SendNota($id, $email = null)
    {
        $qrcode = $this->GenerateQr(null);
        $qr_static = DB::table('qr_statics')->insertGetId([
            'qr_path' => $qrcode,
            'kode_perusahaan' => $id,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('transaksis')->insert([
            'kode_transaksi' => mt_rand(100000, 999999),
            'kode_perusahaan' => $id,
            'kode_qr' => $qr_static,
            'kode_user' => Auth::user()->id ?? 99999,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        $details = [
            'pemilik' => 'Padel',
            'body' => 'Silahkan scan QR Code dibawah untuk mengetahui status dari proses akta legalitas perusahaan anda.',
            'qrcode' => $qrcode
        ];
        $data = \Mail::to($email)->send(new \App\Mail\Nota($details));
        return response()->json($data, 200);
    }

    public function document()
    {
        $data = DB::table('perusahaans')->get();
        return view('dashboard.document', compact('data'));
    }

    public function createDokument(Request $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;

        $perusahaan = DB::table('perusahaans')->insertGetId($data);
        if($perusahaan){
            $nota = $this->SendNota($perusahaan, $request['email']);
            return redirect()->back()->with('success', 'Berhasil Menambahkan Dokumen');
        }
    }

    public function laporan()
    {
        return view('dashboard.laporan');
    }

    public function reports()
    {
        $date = date('Y-m-d');
        return Excel::download(new PerusahaanExport, 'laporan-'.$date.'.xlsx');
    }

    public function createTransaksi(Request $request)
    {
        $trans = [];
        return redirect()->back()->withInput();
    }

    public function getTransaksiById($id)
    {
        $transaksi = DB::select("SELECT * FROM TRANSAKSIS t JOIN PERUSAHAANS p on t.id = p.id_transaksi where kode_transaksi = $id")[0];
        return $transaksi;
    }

    public function getDokumenById($id)
    {
        $dokumen = DB::select("SELECT * FROM PERUSAHAANS where id = $id")[0];
        return $dokumen;
    }

    public function uploadAkta(Request $request)
    {
        $file = $request->file('akta_perusahaan');
        $fileName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('assets/pdf/'), $fileName);

        $data['akta_perusahaan'] = 'assets/pdf/'.$fileName;
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['status'] = 3;
        $perusahaan = DB::table('perusahaans')->where('id', $request->id)->update($data);

        if($perusahaan){
            $this->EmailSukses($request->id, $fileName);
            return redirect()->back()->with('success', 'Berhasil Mengupload Akta');
        }
    }

    public function EmailSukses($id, $filename, $email = null)
    {
        $data = DB::table('perusahaans')->where('id', $id)->first();
        $details = [
            'pemilik' => $data->pemilik,
            'body' => 'Berikut adalah salinan dokumen dari akta legalitas perusahaan yang anda miliki. sudah dapat diambil dengan menyertakan KTP dan Nota',
            'akta' => $data->akta_perusahaan,
            'filename' => $filename
        ];
        $data = \Mail::to($data->email)->send(new \App\Mail\Notif($details));
        return response()->json($data, 200);
    }

    public function login(Request $request)
    {
        $data = $request->except('_token');

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->route('main');
        }else{
            return redirect()->back()->with('error', 'Email atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('halaman.login');
    }

    public function setting()
    {
        $data = \App\Models\User::find(Auth::user()->id);
        return view('dashboard.setting', compact('data'));
    }

    public function ubahSetting($id, Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $user = \App\Models\User::find($id);
        $user->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengubah Data');
    }
}
