@extends('layouts.form')
@section('title')
    Previews
@endsection

@section('style')
    <style>
      @media (min-width: 768px)  {
        .container .frame_preview {
          width: 800px;
          height: 500px;
        }

        .container .button {
          margin-left: 40px;
        }

        .container .hr-h {
          background-color: rgba(253, 99, 0, .5);
          width: 800px;
          height: 2px;
        }
      }

      /* HP mode */
      @media (max-width: 767.98px) {
        .container .frame_preview {
          width: 440px;
          height: 300px;
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
            <div class="active"></div>
            <a href="/validasi"><img src="/icon_legalisir.png" alt="" class="geser"> Validasi</a>
            <a href="/status"><img src="/icon_status.png" alt="" style="margin-left: 4px;"> Status</a>
            <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="/icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
        </div>
    </div>
    @endsection

<?php
function unique_code($limit)
{
  return substr(str_replace( '-', '', Carbon\carbon::now()), 2,4).substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
?>

@section('container')
    @foreach($ijazah as $p)
  <form action="/val" method="post">
    @csrf
    <div style="display: none;">
  <tr>
    <th>Nama</th>
      <td><input type="text" name="nama" value="{{ $p->nama }}"></td>
  </tr>
  <tr>
   <th>Nis</th>
    <td><input type="text" name="nis" value="{{ $p->nis }}"></td>
  </tr>
  <tr>
   <th>Tkn</th>
  <td><input type="text" name="token" value="<?php echo unique_code(3)?>"></td>
</tr>
  </div>

  <div class="container mb-3">
    <div class="row justify-content-end">
      <div class="col-md-9">
        <h2 class="sub-judul mt-5">Preview Ijazah</h2>
        <hr class="mb-4 ">
      </div>
      <div class="col-md-9">
        <iframe src="<?php echo 'data:application/pdf;base64,' .base64_encode($p->ijazah); ?>#toolbar=0" type="application/pdf" class="frame_preview"></iframe>
        <div class="hr-h mt-2 mb-1"></div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="container button mb-5">
    <div class="row justify-content-end">
      <div class="col-md-5">
        <a href="/validasi"  style="text-decoration: none;">
        <div class="d-grid gap-2 prev mb-3">
          <button class="btn " type="button"><img src="icon_arrow.png" alt="" style="height: 20px; ">kembali</button>
        </div>
        </a>
      </div>
      <div class="col-md-5">
        <div class="d-grid gap-2 next">
          <button class="btn " type="submit">Selanjutnya <img src="icon_arrow.png" alt="" style="height: 20px;"></button>
        </div>
      </div>
  </div>
  </form>

@endsection
