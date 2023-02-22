@extends('layouts.form')
@section('title')
Validasi
@endsection

  @section('style')
    <style>
      @media (min-width: 768px)  {
        .label {
          margin-left: -95px;
        }

        .container .next {
          margin-left: -15px;
        }
      }
    </style>
  @endsection

  <?php
  $date = Carbon\carbon::now();
  ?>

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
            <div class="active"></div>
            <a href="/validasi" class="geser"><img src="/icon_legalisir.png" alt=""> Validasi</a>
            <a href="/status"><img src="/icon_status.png" alt="" style="margin-left: 4px;"> Status</a>
            <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="/icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
        </div>
    </div>
    @endsection

@section('container')
  <div class="container konten">
    @foreach ($pesanan as $p)
      <form action="/reg" method="POST">
        {{ csrf_field() }}

          <input type="text" class="form-control" name="nama" value="{{ $p->nama }}" id="nama" placeholder="Nama lengkap" hidden required>
          <input type="text" class="form-control" name="id" value="{{ $p->id }}" id="id" placeholder="id" hidden required>
          <div class="mb-3 row justify-content-end">
            <div class="col-md-9">
              <h2 class="sub-judul mt-5">Registrasi</h2>
              <hr class="mb-4">
            </div>
            {{-- <div class="col-md-9">
              <label for="jumlah" class="mb-2">Jumlah Lembar</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="123" required>
            </div> --}}


            <div class="col-md-9 mb-2">
                <label for="" class="mb-2">Jumlah</label>
                <select class="form-select form-select" name="jumlah">
                <option selected value="5">5</option>
                <option value="10">10</option>
                </select>
            </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-4">
                <label class="label">Methode</label>
              </div>
          </div>
          <div class="mb-3 row justify-content-center">
              <div class="col-md-3">
                <input type="radio" name="methode" value="diambil"> Ambil di tempat
              </div>
              <div class="col-md-3">
               <input type="radio" name="methode" value="dikirim"> Dikirim
              </div>
          </div>
            <div class="mb-3 row justify-content-end" id="" style="display: none;">
              <div class="col-md-9">
                <input type="date" class="form-control" name="tanggal" id="tanggal" hidden value="{{ $date->toDateString() }}">
              </div>
            </div>
            <div class="mb-3 row justify-content-end">
              <div class="col-md-9 mb-3" id="dikirim" style="display: none;">
                <label for="alamat" class="mb-2">Alamat Lengkap</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="jl.jalan, Desa, Kecamatan, Kabupaten, Provinsi">
              </div>
              <div class="col-md-9 mb-5">
                <label for="nomor" class="mb-2">Nomor WhatsApp aktif</label>
                <input type="text" class="form-control" name="nomor" id="nomor" placeholder="628XXXXXXXXXX" required>
              </div>
              <input type="text" class="form-control" name="status" value="proses" hidden>
              <input type="text" class="form-control" name="token" value="{{ $p->token }}" hidden>
              <div class="row justify-content-end">
                <div class="col-md-9">
                  <div class="d-grid gap-2 next">
                    <button type="submit" class="btn " type="button">Selanjutnya <img src="icon_arrow.png" alt="" style="height: 20px;"></button>
                  </div>
                </div>
              </div>
      </form>
  </div>
  @endforeach
  @endsection

  @section('script')
$(function(){
  $('input:radio').change(function(){
      if($(this).val() =="diambil") {
          $("#diambil").show();
          $("#dikirim").hide();
      }
      else {
          $("#dikirim").show();
          $("#diambil").hide();
      }
  });
});
@endsection
