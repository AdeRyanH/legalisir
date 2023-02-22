<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legalisir | Home</title>

    <style>
        .sidenav {
            position: fixed;
            background-color: #346667;
            bottom: 0;
            width: 100%;
            text-decoration: none;
        }

        .container .card-info {
            width: 350px;
            height: 250px;
            box-shadow: 0 0 2px rgba(0,0,0, .5);
            margin-right: 50px;
            margin-top: 30px;
            padding: 10px;
        }

        .container .card-info img {
            width: 100px;
            height: 100px;
            float: left;
        }

        .container .card-info .hr-v {
            width: 5px;
            height: 50px;
            background-color: rgba(253, 99, 0, .7);
            margin-left: 10px;
            margin-top: 25px;
            float: left;
        }

        .container .card-info h2 {
            color: rgba(253, 99, 0, .8);
            margin-left: 140px;
            margin-top: 25px;
        }


        /* Tablet mode */
        @media (min-width: 768px) {
            .sidenav {
                height: 100%;
                width: 300px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #346667;
                overflow-x: hidden;
                padding-top: 20px;
                border-radius: 0 20px 20px 0;

            }

            .sidenav .profile {
                border-bottom: 1px solid #fff;
                width: 80%;
                padding: 20px 10px 20px 10px;
                margin-top: 30px;
                margin-left: 10%;
            }

            .hal .logo {
                width: 70px;
                height: 70px;
                margin-left: 32px;
                float: left;
                margin-right: 30px;
            }

            .sidenav .profile p,
            .sidenav .profile h5 {
                margin-left: 90px;
                margin-top: -8px;
            }

            .sidenav .hal p,
            .sidenav .profile p {
                color: #FD6300;
                padding-top: 10px;
                margin-bottom: 5px;
                font-weight: 600;
            }

            .sidenav .hal h5,
            .sidenav .profile h5 {
                color: #fff;
                margin-top: -3px;
            }

            .sidenav .icon_profile {
                float: left;
                width: 50px;
                height: 50px;
                margin-top: 2%;
                margin-left: 10px;

            }

            .sidenav .link {
                margin-top: 50px;
            }

            .sidenav .link a {
                padding: 6px 6px 6px 32px;
                text-decoration: none;
                font-size: 18px;
                color: white;
                display: block;
                position: relative;
            }

            .sidenav .link a:hover,
            .sidenav .link img:hover{
                margin-left: 15px;
            }

            .container .konten {
                margin-top: 90px;
            }

            .container .hr {
                width: 150px;
                height: 5px;
                background-color: rgba(253, 99, 0, .8);
                margin-top: 60px;
                margin-left: -40px;
            }

            .container .ils_login {
                width: 280px;
                height: 250px;
            }

            .sidenav .link .active::before {
                content: '';
                width: 40px;
                height: 53px;
                position: absolute;
                left: 0;
                background-color: rgba(253, 99, 0, .9);
                margin-top: -2px;
                border-radius: 0 5px 5px 0;
            }

            .sidenav .link .geser {
                margin-left: 15px;
            }

        }


        /* Handphone mode */
        @media (max-width: 767.98px) {
            .sidenav {
                padding: 10px 0 10px 20px;
                height: 70px;
                border-radius: 7px;
                margin-bottom: -5px;
            }

            .sidenav .hal .logo,
            .sidenav .hal p,
            .sidenav .hal h5,
            .sidenav .profile p,
            .sidenav .profile h5 {
                display: none;
            }

            .sidenav .profile {
                height: 10px;
            }

            .sidenav .link a{
                text-decoration: none;
                color: #fff;
                padding-right: 30px;
                position: relative;
            }

            .sidenav .profile .icon_profile {
                margin-left: 87%;
                margin-bottom: -30px;
                width: 40px;
            }

            .sidenav .link .active {
                width: 90px;
                height: 70px;
                background-color: #FD6300;
                position: absolute;
                border-radius: 10px;
                margin-top: -10px;
                box-shadow: 0 0 1px rgba(0, 0, 0, .8);
            }

            .container .ils_login {
                width: 380px;
                height: 350px;
                margin-top: 50px;
            }

        }



    </style>
</head>
<body>
    <div class="sidenav shadow">
        <div class="hal">
            <img src="logo_stmj.png" alt="" class="logo">
            <p>SMKN 1 JENANGAN</p>
            <h5>Legalisir Ijazah</h5>
        </div>
        <div class="profile">

        </div>
        <div class="link">
            <div class="active"></div>
            <a href="/" class="geser"><img src="icon_home.png" alt="" style="margin-top: -3px;">Home</a>
            <a href="/validasi"><img src="icon_legalisir.png" alt=""> Validasi</a>
            <a href="/status"><img src="icon_status.png" alt="" style="margin-left: 4px;"> Status</a>
            <a href="https://api.whatsapp.com/send/?phone=6289679537707"><img src="icon_kontak.png" alt="" style="margin-left: 4px;"> Hubungi Admin</a>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-end konten">
            <div class="col-md-4">
                <img src="ils_legalisir.png" alt="" class="ils_login">
            </div>
            <div class="col-md-5 mt-5">
                @yield('container')
                <div class="hr"></div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-end">
                <div class="col-md-5 card-info">
                    <a href="/validasi" style="text-decoration: none;">
                    <img src="icon_legalisir_green.png" alt="">
                    <div class="hr-v"></div>
                    <h2>Legalisir</h2>
                    <p class="mt-5 ms-3" style="color: #000;">Legalisir adalah proses pembubuhan cap stempel dan tanda tangan asli oleh yang berwenang di atas fotokopi ijazah sebagai pembuktian fotokopi tersebut sesuai dengan ijazah asli.</p>
                    </a>
                </div>
                <div class="col-md-5 card-info mb-5">
                    <a href="/status" style="text-decoration: none;">
                    <img src="icon_status_green.png" alt="">
                    <div class="hr-v"></div>
                    <h2>Status</h2>
                    <p class="mt-5 ms-3" style="color: #000;">Status legalisir ijazah merupakan fitur untuk mengecek status legalisir ijazah dan mengecek status pengiriman ijazah</p>
                    </a>
                </div>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
