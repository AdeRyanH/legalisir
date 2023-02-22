<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Proses extends Controller
{
    public function index(Request $request)
	{
		if($request->has('cari')){
		$pesanan = DB::table('pesanan')->where('token', $request->cari)->get();
			if (blank($pesanan)) {
				return view('status2');
			}
			else {
				return view('proses',['pesanan' => $pesanan]);
			}
			
		}
		else {
			return view('status');
		}
	}

	public function diterima(Request $request)
    {
        DB::table('pesanan')->where('id',$request->id)->update([
        'id' => $request->id,
        'nama' => $request->nama,
		'nis' => $request->nis,
        'token' => $request->token,
        'jumlah' => $request->jumlah,
        'methode' => $request->methode,
        'tanggal' => $request->tanggal,
        'alamat' => $request->alamat,
        'nomor' => $request->nomor,
		'resi' => $request->resi,
        'status' => $request->status
	    ]);
        return redirect('/');
    }
}