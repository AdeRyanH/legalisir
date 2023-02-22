@extends('layouts.form')
@section('title')
Status
@endsection

  @section('style')
    <style>
      @media (min-width: 768px) {

      }

      @media (max-width: 767.98px) {
        .sidenav .link .active {
          margin-left: 128px;
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
            <a href="/validasi" ><img src="/icon_legalisir.png" alt=""> Validasi</a>
            <div class="active"></div>
            <a href="/status" class="geser"><img src="/icon_status.png" alt="" style="margin-left: 4px; "> Status</a>
            <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="/icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
        </div>
    </div>
    @endsection

@section('container')
  <div class="container">
      <form action="/detail/" method="GET">
        <div class="row justify-content-end ">
          <div class="col-md-9">
            <h2 class="sub-judul mt-5">Cek Status Legalisir</h2>
            <hr class="mb-4">
          </div>
          <div class="col-md-9 mb-4">
            <label for="cari" class="mb-2">Masukkan Token</label>
            <input type="text" class="form-control" name="cari" id="cari">
          </div>
          <div class="col-md-9">
            <div class="d-grid gap-2 next">
              <button class="btn " type="submit" name="check" type="button">Cek Status <img src="icon_arrow.png" alt="" style="height: 20px;"></button>
            </div>
          </div>
        </div>
      </form>
  </div>
@endsection
