<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP & MYSQLI</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>

    <body class="bg-secondary">
        <!-- Layout Utama -->
        <div class="container-fluid pt-5 mt-4">
            <div class="d-flex justify-content-center align-items-center flex-wrap mt-1 pt-1">
                <div class="card col-sm-4 col-md-4">
                    <div class="card-header">
                        <h4 class="card-title text-center fs-4 fw-normal">Login Belajar</h4>
                        <h4 class="card-title text-center fs-4 fw-normal">PHP & MYSQLI</h4>
                    </div>
                    <div class="card-body">
                        <form action="aksi-signin.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">username</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="text" name="username" placeholder="masukkan username anda ..."
                                            class="form-control" required id="">
                                    </div>
                                </div>
                                <div class="my-2"></div>
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">password</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="password" name="password" placeholder="masukkan password anda ..."
                                            class="form-control" required id="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="./register.php" aria-current="page" role="button" type="button"
                                    class="btn btn-link text-decoration-none">
                                    <span>Register Account</span>
                                </a>
                            </div>
                            <div class="my-1"></div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <button type="submit" aria-current="page"
                                        class="btn btn-primary btn-sm btn-outline-light">
                                        <i class="fas fa-save fa-1x"></i>
                                        <span>Login</span>
                                    </button>
                                    <button type="reset" aria-current="page"
                                        class="btn btn-danger btn-sm btn-outline-light">
                                        <i class="fas fa-eraser fa-1x"></i>
                                        <span>Hapus Semua</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Layout Akhir -->
        <script crossorigin="anonymous" lang="javascript"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        </script>
        <script crossorigin="anonymous" lang="javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        </script>
        <script crossorigin="anonymous" lang="javascript"
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
        </script>
    </body>

</html>