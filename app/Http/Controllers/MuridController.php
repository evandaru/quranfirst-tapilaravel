<?php

namespace App\Http\Controllers;

use App\Exports\muridExport;
use App\Models\murid;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MuridController extends Controller
{
    public function store(Request $request)
    {
        $hari = implode(",", $request->hari);
        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'domisili' => $request->domisili,
            'no_wa' => $request->no_wa,
            'usia' => $request->usia,
            'program' => $request->program,
            'tingkat' => $request->tingkat,
            'hari' => $hari,
            'waktu' => $request->waktu,
            'informasi' => $request->informasi,
            'info' => $request->info
        ];
        $data_string = json_encode($data);
        $url = 'https://script.google.com/macros/s/AKfycbzqW-YpwEcTSS8UI2Ge11XkZXv57KTyu45uDw9nLGbh7jBNPFnCqoGkSxYOXx25HsuedA/exec';
        $options = array(
            'http' => array(
                'header'  => 'Content-type: application/json',
                'method'  => 'POST',
                'content' => $data_string
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result) {
            return view('formsuccess');
        } else {
            return 'gagal';
        }
    }
}
