<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Validasi extends Controller
{
    public function index(Request $request)
	{
		if($request->has('cari')){
			$ijazah = DB::table('ijazah')->where('nis', $request->cari)->get();
				if (blank($ijazah)) {
					return view('validasi2');
				}
				else {
					return view('preview',['ijazah' => $ijazah]);
				}
				
			}
			else {
				return view('validasi');
			}
	}

	public function store(Request $request)
    {
        DB::table('pesanan')->insert([ 
		'token'=> $request ->token,
        'nama' => $request->nama,
        'nis' => $request->nis
    ]);

    $pesanan = DB::table('pesanan')->where('token', $request->token)->get();
        return view('registrasi',['pesanan' => $pesanan]);
    }
}