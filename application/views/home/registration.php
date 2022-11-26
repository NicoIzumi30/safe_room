<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/build/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/build/css/intlTelInput.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/build/css/demo.css">


</head>

<body class="bg-gradient-dark">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class=" text-center">
                            <h2 class="mt-4">Register</h2>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form method="POST" action="<?= base_url('home/register') ?>">
                            <div class=" mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" aria-describedby="emailHelp" value="<?= set_value('nama') ?>">
                                <div style="text-align: start;">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Alamat Surat Elektronik" aria-describedby="emailHelp" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class=" mb-3">
                                <label for="phone" class="form-label col-12">Nomot Telpon</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Telpon" style="width: 100% !important;" value="<?= set_value('phone') ?>">
                                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class=" mb-3">
                                <label for="password1" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" name="password1" id="password1" placeholder="Kata Sandi" aria-describedby="pw">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                <!-- <div id="pw" class="form-text">At least 8 char, use at least 1 upper and 1 lower
                                    case, 1 number, and 1
                                    symbol(!@?#$%^&*-+=_)</div> -->
                            </div>
                            <div class=" mb-3">
                                <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi" aria-describedby="pw">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>


                                <div class="col-md-2"></div>
                                <div class="col-md-9 mt-4 text-center mx-auto">
                                    <p>Dengan masuk atau membuat akun, Anda setuju dengan kami <a href="#"> Syarat &
                                            Ketentuan</a>
                                        Dan <a href="#">Kebijakan Privasi</a>
                                    </p>
                                </div>
                            </div>
                            <div class="text-center mb-5">
                                <button type="submit" class="btn btn-primary col-10 ">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/build/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/build/js/sb-admin-2.min.js"></script>


    <script src="<?= base_url() ?>assets/build/js/intlTelInput.js"></script>
    <script>
        $("#phone").intlTelInput({
            utilsScript: "<?= base_url() ?>assets/build/js/utils.js"
        });
    </script>

</body>

</html>