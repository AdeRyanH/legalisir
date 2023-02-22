

@extends('layouts.form')

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
            <a href="/"><img src="icon_home.png" alt="" style="margin-top: -3px;">Home</a>
            <div class="active"></div>
            <a href="/validasi" class="geser"><img src="icon_legalisir.png" alt="" "> Validasi</a>
            <a href="/status"><img src="icon_status.png" alt="" style="margin-left: 4px;"> Status</a>
            <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
        </div>
    </div>
    @endsection

@section('container')
<div class="container">
    <form action="/validasi/" method="get">
        <div class="mb-3 row justify-content-end">
          <div class="col-md-9">
            <h2 class="sub-judul mt-5 mb-3">Validasi</h2>
            <hr class="mb-4">
          </div>
          <div class="col-md-9">
            <label for="nis" class="mb-2">NIS</label>
            <input type="number" class="form-control" name="cari" id="nis" required>
          </div>
          </div>

          <div class="row justify-content-end">
            <div class="d-grid gap-2 col-sm-9 next">
              <button type="submit" class="btn " type="button">Selanjutnya <img src="icon_arrow.png" alt="" style="height: 20px;"></button>
            </div>
          </div>



    </form>
</div>
@endsection

