<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Peduli Diri - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="img" style="background-image: url(img/bg.jpg); background-size:100%;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-11 col-md-8">

                        <div class="card o-hidden border-0 shadow-lg my-5">                  

                             <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/12.png" width="60%">
                                        <h1 class="h4 text-gray-900 card-title mb-2">Silakan Buat Akun</h1>
                                        <P><b class="h4 text-gray-700 card-title mb-2">PEDULI DIRI</b></p>
                                    </div>
                                    <form class="user" method="post" action="proses_register.php">
                                        <div class="form-group">
                                            <input required type="text" minlength="16" name="nik" maxlength="16" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan NIK anda..." minlength="16" maxlength="16">
                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap"required type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Nama lengkap Anda...">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Daftar
</button>  
                                        <hr>
                                       <p>Sudah Punya Akun?
                                        <a href="index.php">Login</a></p>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>