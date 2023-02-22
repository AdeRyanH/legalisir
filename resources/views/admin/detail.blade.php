@extends('layouts.adminlayout')
@section('title')
    Detail
@endsection

    @section('style')
        <style>
        .container input {
            margin-top: -15px;
        }

        .container .border {
            border-bottom: 1px solid black;
            margin-bottom: 10px;
            margin-top: -5px;
        }

        @media (min-width: 768px) {
            .sidenav .link .but {
            background-color: #346667;
            border: none;
            color: #fff;
            font-size: 18px;
            padding: 6px 6px 6px 32px;
            }

            .sidenav .link .but:hover{
                margin-left: 15px;
            }
        }

        @media (max-width: 767.98px) {
            .sidenav .link .active {
            left: 13px;
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
              <img src="/profile_icon.png" alt="icon_profile" class="icon_profile">
              <p>Admin</p>
              <h5>{{ Auth::user()->name }}</h5>
          </div>
          <div class="link">
              <div class="active"></div>
              <a href="/admin/status"><img src="/icon_legalisir.png" alt="" class="geser"> Legalisir</a>
              <a href="/admin/kontak"><img src="/icon_kontak.png" alt="" > Kontak</a>
              <form action="/logout" method="post" class="lg">
              @csrf
              <button type="submit" class="but"><img src="/icon_home.png" alt=""> logout</button>
              </form>
          </div>
      </div>
    @endsection

<?php
  $date = Carbon\carbon::now();
  ?>

@section('container')
<div class="container">
    @foreach ($pesanan as $p)
    <form action="/admin/upd" method="post">
        {{ csrf_field() }}
                <input type="number" name="id" value="{{ $p->id }}" hidden>
            <div class="row justify-content-end ms-3">
                <div class="col-lg-9">
                    <h2 class="sub-judul mt-5">Detail</h2>
                    <hr class="mb-2 ">
                </div>
                <div class="col-lg-9">
                    <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
                    <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="{{ $p->nama }}">
                    <div class="border"></div>

                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah :</label>
                    <input type="text" readonly class="form-control-plaintext" id="jumlah" name="jumlah" value="{{ $p->jumlah }}">
                    <div class="border"></div>

                    <label for="methode" class="col-sm-2 col-form-label">Methode :</label>
                    <input type="text" readonly class="form-control-plaintext" id="methode" name="methode" value="{{ $p->methode }}">
                    <div class="border"></div>

                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal :</label>
                    <input type="text" readonly class="form-control-plaintext" id="tanggal" name="tanggal" value="{{ $p->tanggal }}">
                    <div class="border"></div>

                    <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                    <input type="text" readonly class="form-control-plaintext" id="alamat" name="alamat" value="{{ $p->alamat }}">
                    <div class="border"></div>

                    <label for="nomor" class="col-sm-2 col-form-label">Nomor :</label>
                    <input type="text" readonly class="form-control-plaintext" id="nomor" name="nomor" value="{{ $p->nomor }}">
                    <div class="border"></div>

                    <label for="status" class="col-form-label mb-3">Status :</label>
                    {{-- <input type="text" class="form-control" id="status" name="status" value="{{ $p->status }}"> --}}
                    <select class="form-select form-select" name="status">
                    <option selected value="{{ $p->status }}">{{ $p->status }}</option>
                    <option value="proses">proses</option>
                    <option value="[{{ $date->toDateString() }}] telah dikirim ">Telah dikirim</option>
                    <option value="[{{ $date->toDateString() }}] bisa diambil">Bisa diambil</option>
                    <option value="[{{ $date->toDateString() }}] telah diterima">Telah diterima</option>

                    </select>

                    <label for="resi" class="col-form-label mb-3">Nomor Resi :</label>
                    <input type="text" class="form-control" id="resi" name="resi" value="{{ $p->resi }}">

                    <div class="d-grid gap-2 next mt-4">
                        <button type="submit" class="btn " >Simpan</button>
                    </div>
                </div>
            </div>
    </form>
    @endforeach
</div>
@endsection
