<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legalisir | @yield('title')</title>

    <style>
        .sidenav {
            position: fixed;
            background-color: #346667;
            bottom: 0;
            width: 100%;
            text-decoration: none;
        }

        /* color tabel coloumns */
        .container .thead {
          background-color: #67999A;
          color: #fff;
        }

        /* utility button */
        .container .next button{
            background-color: #67999A;
            color:white ;
        }

        .container .next img {
            transform: rotate(225deg);
        }

        .container .sub-judul {
            color: rgba(253, 99, 0, .8);
        }

        .container .prev button {
            background-color: #fd6300;
            color:white;
        }

        .container .prev img {
            transform: rotate(-315deg);
            margin-right: 5px;
        }

        .container .thead {
          background-color: #67999A;
          color: #fff;
        }

        /* button detail */

        .container tbody tr td a {
            background-color: rgba(253, 99, 0, .8);
            padding: 4px 25px 6px 25px;
            border-radius: 5px;
            box-shadow: 0 0 1px rgba(0,0,0,.8);

        }

        .container tbody tr td a img {
            transform: rotate(225deg);

        }


        /* dekstop mode */

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
                border-radius: 0 20px 20px 0
            }

            .sidenav .profile {
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                border-radius: 5px;
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

            .sidenav .link .active::before {
                content: '';
                width: 40px;
                height: 53px;
                position: absolute;
                left: 0;
                background-color: rgba(253, 99, 0, .9);
                margin-top: 3px;
                border-radius: 0 5px 5px 0;
            }

            .sidenav .link .geser {
                margin-left: 15px;
            }



        }


        /* handphone mode */
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
                margin-left: 80%;
                margin-bottom: -30px;
                width: 40px;
            }

            .sidenav .link .active {
                width: 120px;
                height: 70px;
                background-color: #FD6300;
                position: absolute;
                border-radius: 10px;
                margin-top: -10px;
                box-shadow: 0 0 1px rgba(0, 0, 0, .8);
                left: 147px;
            }

        }

    </style>

        @yield('style')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="sidenav">
        @yield('sidenav')
    </div>
    <div class="container" >
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
