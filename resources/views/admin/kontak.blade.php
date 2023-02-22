@extends('layouts.adminlayout')
@section('title')
    Kontak
@endsection


@section('style')
    <style>

      @media (min-width: 768px) {
        .container {
          margin-left: 80px;
        }

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
          margin-top: -50px;
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
              <a href="/admin/status"><img src="/icon_legalisir.png" alt="" > Legalisir</a>
              <div class="active"></div>
              <a href="#"><img src="/icon_kontak.png" alt="" class="geser"> Kontak</a>
              <form action="/logout" method="post" class="lg">
              @csrf
              <button type="submit" class="but"><img src="/icon_home.png" alt=""> logout</button>
              </form>
          </div>
      </div>
    @endsection

@section('container')
<div class="container mb-5">
    <div class="row justify-content-end">
      <div class="col-lg-10">
        <h2 class="sub-judul mt-5">Kontak</h2>
        <hr class="mb-4 ">
      </div>
      <div class="col-lg-10">
        <table class="table table-striped">
          <thead>
            <tr class="thead">
              <th scope="col">Nama</th>
              <th scope="col">Nomor</th>
              <th scope="col">Hubungi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($pesanan as $p)
                  <tr>
                      <td>{{ $p->nama }}</td>
                      <td>{{ $p->nomor }}</td>
                      <td><a href="https://api.whatsapp.com/send/?phone={{ $p->nomor }}"><img src="/icon_arrow.png" alt="" style="height: 20px;"></a></td>

                  </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>

</div>

@endsection
