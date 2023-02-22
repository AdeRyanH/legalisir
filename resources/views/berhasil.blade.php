@extends('layouts.form')
@section('title')
    Berhasil
@endsection

@section('style')
    <style>
        .container .thead {
          background-color: #67999A;
          color: #fff;
        }



        .container .token {
            width: 400px;
            height: 150px;
            background-color: #eee;
            border: 1px solid rgb(103, 153, 154);
            font-weight: bold;
            font-size: 50px;
            padding: 5px 10px 5px 90px;
            color:  rgba(253, 99, 0, .8);
        }



        .container p {
            color: red;
        }

        @media (min-width: 768px) {

        }

        @media (max-width: 767.98px) {
            .container .token {
                padding-left: 60px;
            }
        }
    </style>
  @endsection

@section('sidenav')
        <div class="sidenav shadow">
            <div class="hal">
                <img src="/logo_stmj.png" alt="" class="logo">
                <p>SMKN 1 JENANGAN</p>
                <h5>Legalisir Ijazah</h5>
            </div>
            <div class="profile">

            </div>
            <div class="link">
                <a href="/"><img src="/icon_home.png" alt="" style="margin-top: -3px;">Home</a>
                <a href="/validasi"><img src="/icon_legalisir.png" alt="" > Validasi</a>
                <div class="active"></div>
                <a href="/status" class="geser"><img src="/icon_status.png" alt="" style="margin-left: 4px;" > Status</a>
                <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="/icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
            </div>
        </div>
    @endsection


@section('container')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-8">
            <div class="col-md-12">
                <h2 class="sub-judul mt-5">Reservasi Berhasil</h2>
                <hr class="mb-4 ">
            </div>
            <h4>Legalisir Online SMKN 1 Jenangan Ponorogo</h4>
            @foreach ($pesanan as $p)
            <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->nama }}">
            <div class="border mb-3"></div>

            <label for="nama" class="col-sm-4 col-form-label">Nomor Telephone :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->nomor }}">
            <div class="border mb-3"></div>

            <label for="nama" class="col-sm-2 col-form-label">Jumlah :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->jumlah }}">
            <div class="border mb-3"></div>

            <label for="nama" class="col-sm-2 col-form-label">Tanggal :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->tanggal }}">
            <div class="border mb-3"></div>

            <label for="nama" class="col-sm-2 col-form-label">Methode :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->methode }}">
            <div class="border mb-3"></div>

            <div style="{{ ($p->methode === 'diambil') ? 'display: none;' : 'display: block;' }}">
            <label for="nama" class="col-sm-2 col-form-label">Alamat :</label>
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->alamat }}">
            <div class="border mb-3"></div>
            </div>


            <table class="mt-4">
                <tr>
                <th class="pe-5" style="font-size: 20px;">Token :</th>
                </tr>
                <tr>
                    <td class="token">{{ $p->token }}</td>
                </tr>
            </table>
            <p>*Simpan token anda, guna mengecek status legalisr</p>
            @endforeach
            <div class="row justify-content-cdnter">
                <a href="/">
                    <div class="col-md-12 next mt-2 mb-5">
                    <button type="submit" class="btn col-12" type="button"> kembali ke <img src="icon_home.png" alt="" style="transform: none; height: 20px; margin-top: -4px; "></button>
                    </div>
                </a>
          </div>


        </div>
    </div>
</div>


@endsection
