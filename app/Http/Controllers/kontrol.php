<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class kontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/status');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function index()
    {
    	$pesanan = DB::table('pesanan')->orderby('id','desc')->get();
    	return view('admin.status',['pesanan' => $pesanan]);
    }

    public function kontak()
    {
    	$pesanan = DB::table('pesanan')->get();
    	return view('admin.kontak',['pesanan' => $pesanan]);
    }

    public function wa()
    {
    	return redirect('http://wa.me/6281331440131');
    }

    public function validasi(Request $request)
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

    public function status(Request $request)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       DB::table('pesanan')->where('id',$request->id)->update([
        'id' => $request->id,
        'nama' => $request->nama,
        'token' => $request->token,
        'jumlah' => $request->jumlah,
        'methode' => $request->methode,
        'tanggal' => $request->tanggal,
        'alamat' => $request->alamat,
        'nomor' => $request->nomor,
        'status' => $request->status
	]);

	$pesanan = DB::table('pesanan')->where('id', $request->id)->get();
        return view('berhasil',['pesanan' => $pesanan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $pesanan = DB::table('pesanan')->where('id',$id)->get();
	    return view('admin.detail',['pesanan' => $pesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('pesanan')->where('id',$request->id)->update([
        'nama' => $request->nama,
		'jumlah' => $request->jumlah,
		'methode' => $request->methode,
		'tanggal' => $request->tanggal,
		'alamat' => $request->alamat,
        'nomor' => $request->nomor,
        'status' => $request->status,
        'resi' => $request->resi
	    ]);
        return redirect('/admin/status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}