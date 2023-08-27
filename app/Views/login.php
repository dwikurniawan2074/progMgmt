<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>images/logo_trafindo_only.png" />
    <link rel="stylesheet" href="<?php echo base_url() ?>modernize/src/assets/css/styles.min.css" />
    <style>
        .page-wrapper {
            background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.40)), url('https://media.licdn.com/dms/image/C5622AQHQ9EHbEr9J3Q/feedshare-shrink_1280/0/1617942357833?e=1695859200&v=beta&t=1sjWje2JbNSs4biONj9zcfeba1fTbe19ja5EnMaOtIo') no-repeat;
            ;
            /* background: url('');; */
            background-size: cover;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?php echo base_url() ?>images/logo_trafindo_full.png" width="180" alt="">
                                </a>
                                <p class="text-center">Silahkan Masuk Dengan Akunmu</p>
                                <form action="<?php base_url() ?> /loginAction " method="POST">
                                    <?php if (session()->getFlashdata('error')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Ingin Membuat Akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Contact Admin</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>modernize/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>modernize/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>