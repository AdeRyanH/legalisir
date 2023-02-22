<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legalisir | Home</title>

    <style>
        body {
            background-color: #2c595a!important;
        }


        .container .back-login {
            background-color: #fff;
            margin-top: 150px;
            padding: 50px 10px 40px 0px;
            border-radius: 5px;
        }

        .container .ils_legalisir {
            float: left;
            width: 300px;
            height: 250px;
            margin-left: 20px;
        }

        .container .back-login .next button {
            background-color: #2c595a;
            color: #fff;
        }

        .container .back-login .next img {
            width: 20px;
            transform: rotate(-180deg);
        }

        .container .sub-judul {
            color: rgba(253, 99, 0, .8);
            margin-top: -10px;
        }


        /* HP mode */

        @media (max-width: 767.98px) {
            .container .back-login {
                padding: 20px;
                margin-top: 100px;
            }

            .container .ils_legalisir {
                margin-left: 40px;
            }


        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="back-login shadow mb-5">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <img src="ils_legalisir.png" alt="" class="ils_legalisir">
                        </div>
                        <div class="col-lg-6">
                            <form action="/log" method="post">
                                @csrf
                            <h5 class="sub-judul">Form Login</h5>
                            <div class="col-lg-11 mb-2">
                                <label for="email" class="mb-2">Email</label>
                                <input type="text" class="form-control" name="email" id="email" >
                            </div>
                            <div class="col-lg-11 mb-3">
                                <label for="password" class="mb-2">Password</label>
                                <input type="password" class="form-control" name="password" id="password" >
                            </div>
                            <div class="col-lg-11">
                                <div class="d-grid gap-2 next">
                                    <button class="btn " type="submit">Masuk <img src="icon_enter.png" alt=""></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
