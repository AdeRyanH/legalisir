@extends('layouts.form')


@section('style')
    <style>
        .container button {
            margin-left: 10px;
            background-color: #fd6300;
            color:white;

        }

        .container .lacak:hover {
            background-color: #fd6300;
            color:white;

        }

        .container button img {
            transform: rotate(225deg);
            margin-left: 5px;
        }

        .container .col-form-label,
        .container .form-control-plaintext {
            margin-top: -10px;
        }

        .container .border {
            border: none;
        }

        @media (min-width: 768px) {
            .container .nama {
                margin-top: -24px;
            }

            .container .lacak {
            margin-left: 495px;
            margin-top: -60px;
        }


        }

        @media (max-width: 767.98px) {
            .sidenav .link .active {
            margin-left: 128px;
            }

            .container .lacak {
            margin-left: 10px;
            }

            .container .konten .lacak {
                margin-left: 150px;
                margin-top: -60px;
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

    <?php
  $date = Carbon\carbon::now();
  ?>

    @section('container')
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-9">
                <h2 class="sub-judul mt-5">Status</h2>
                <hr class="mb-4 ">
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-9 konten">
            @foreach ($pesanan as $p)
            <form action="/diter" method="post">
                @csrf
                <label for="nama" class="col-form-label">Nama :</label>
                <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->nama }}">
                <div class="border"></div>
                <label for="nama" class="col-form-label">Jumlah :</label>
                <input type="text" readonly class="form-control-plaintext" id="jumlah" name="jumlah" value="{{ $p->jumlah}}">
                <div class="border"></div>
                <label for="nama" class="col-form-label">Metode :</label>
                <input type="text" readonly class="form-control-plaintext" id="metode" name="methode" value="{{ $p->methode }}">
                <div class="border"></div>
                <div style="{{ ($p->methode === 'dikirim') ? 'display: none;' : 'display: block;' }}">
                    <label for="nama" class="col-form-label">Tanggal :</label>
                    <input type="text" readonly class="form-control-plaintext" id="metode" name="tanggal" value="{{ $p->tanggal }}">
                    <div class="border"></div>
                </div>
                        <div style="{{ ($p->methode === 'diambil') ? 'display: none;' : 'display: block;' }} margin-top:-30px;">
                            <label for="nama" class="col-form-label pt-5">Resi :</label>
                            <input type="text" readonly class="form-control-plaintext" id="resi" name="resi" value="{{ $p->resi }}" style="margin-bottom: -10px;">
                            <a href="https://parcelsapp.com/id/tracking/{{ $p->resi }}" >
                            <button class="btn col-md-3 mb-1 lacak" type="button">lacak resi<img src="/icon_arrow.png" alt="" style="height: 20px;"></button></a>
                            <div class="border mb-3" style="margin-top:-20px;"></div>
                        </div>

                 <label for="nama" class="col-form-label">Status :</label>
                <input type="text" readonly class="form-control-plaintext" id="status" name="status" value="{{ $p->status }}">
                <div class="border"></div>

                    <input type="text" name="nomor" value="{{ $p->nomor }}" hidden>
                    <input type="text" name="alamat" value="{{ $p->alamat }}" hidden>
                    <input type="text" name="token" value="{{ $p->token }}" hidden>
                    <input type="text" name="nis" value="{{ $p->nis }}" hidden>
                    <input type="text" name="id" value="{{ $p->id }}" hidden>
                    <input type="text" name="status" value="diterima pada [{{ $date->toDateString() }}]" hidden>
                    <button type="submit" {{ ($p->methode === 'diambil') ? 'hidden' : '' }} class="btn col-md-3" type="button" style="background-color: #FD6300;">Diterima <img src="/icon_arrow.png" alt="" style="height: 20px"></button>
                </form>
                @endforeach
            </div>
            </div>
          </div>

        <div class="row justify-content-end">
            <div class="col-md-9 next mt-4 mb-5">
              <button type="submit" class="btn col-12" type="button">kembali ke <img src="/icon_home.png" alt="" style="transform: none; height: 20px; margin-top: -4px;"></button>
            </div>
          </div>

    </div>

    @endsection
