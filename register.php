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
                <div class="card col-sm-5 col-md-5">
                    <div class="card-header">
                        <h4 class="card-title text-center fs-4 fw-normal">Register Belajar</h4>
                        <h4 class="card-title text-center fs-4 fw-normal">PHP & MYSQLI</h4>
                    </div>
                    <div class="card-body">
                        <form action="aksi-register.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">username</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="text" name="username" maxlength="100"
                                            placeholder="masukkan username baru anda ..." class="form-control" required
                                            id="">
                                    </div>
                                </div>
                                <div class="my-1"></div>
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">password</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="password" name="password" maxlength="100"
                                            placeholder="masukkan password baru anda ..." class="form-control" required
                                            id="">
                                    </div>
                                </div>
                                <div class="my-1"></div>
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">nama</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="text" name="nama" maxlength="80"
                                            placeholder="masukkan nama anda ..." class="form-control" required id="">
                                    </div>
                                </div>
                                <div class="my-1"></div>
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">Foto</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-icon img-thumbnail w-25">
                                            <img src="./assets/user_logo.png" id="preview" alt="" width="64"
                                                class="img-rounded img-fluid">
                                        </div>
                                        <div class="my-1"></div>
                                        <input type="file" name="foto" accept="image/*" class="form-control" required
                                            onchange="previewImage(this)" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="my-1"></div>
                            <div class="text-center">
                                <a href="./index.php" aria-current="page" class="text-decoration-none text-primary">
                                    Sudah punya akun ...
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <button type="submit" aria-current="page"
                                        class="btn btn-primary btn-sm btn-outline-light">
                                        <i class="fas fa-save fa-1x"></i>
                                        <span>Simpan</span>
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
        <script>
        function previewImage(input) {
            const file = input.files[0];
            if (file) {
                const preview = document.getElementById('preview');
                preview.src = URL.createObjectURL(file);
                preview.onload = function() {
                    URL.revokeObjectURL(preview.src); // Free memory
                };
            }
        }
        </script>
    </body>

</html>