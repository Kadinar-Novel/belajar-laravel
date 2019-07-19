<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
class QrCode extends Controller
{
    public function index()
    {
        $qrcode = new BaconQrCodeGenerator;
        $filename = '123456';
        $qrcode->format('png')->size(500)->generate($filename, '../public/qrcode/'.$filename.'.png');
        return view('qrcode.index', ['filename' => $filename]);
    }
}



