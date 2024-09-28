<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Profile</title>
        <?php 
            if($_SESSION['level'] == "pengguna"){
                require_once("../ui/header.php");
                require_once("../../database/koneksi.php");
            }else{
                header("location:dashboard/index.php");
            }
        ?>
    </head>

    <body>
        <?php require_once("../ui/navbar.php"); ?>
        <div class="d-flex justify-content-center align-items-center flex-wrap mt-4 pt-5">
            <div class="card col-sm-4 col-md-4 mb-4">
                <div class="card-header">
                    <h4 class="card-title">Edit Profile</h4>
                    <div class="breadcrumb d-flex justify-content-end align-items-end">
                        <li class="breadcrumb breadcrumb-item">
                            <a href="../dashboard/index.php" aria-current="page"
                                class="text-primary text-decoration-none">Beranda</a>
                        </li>
                        <li class="breadcrumb breadcrumb-item">
                            <a href="../ui/header.php?page=profile&id=<?php echo $_GET['id']?>" aria-current="page"
                                class="text-primary text-decoration-none">Edit Profile</a>
                        </li>
                    </div>
                </div>
                <div class="card-body container mt-2">
                    <div class="table-responsive">
                        <?php if(isset($_GET['id'])):?>
                        <?php 
                            $id = htmlspecialchars($_GET['id']);
                            $ambil = $koneksi->query("SELECT * FROM tb_user WHERE id_akun = '$id'");
                            while($pecah = mysqli_fetch_array($ambil)){
                        ?>
                        <form action="../dashboard/aksi-edit.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">username lama</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="text" name="usernamelama" value="<?php echo $pecah['username']?>"
                                            maxlength="100" placeholder="masukkan username baru anda ..."
                                            class="form-control" required id="" readonly>
                                    </div>
                                </div>
                                <div class="my-1"></div>
                                <div class="form-inline row justify-content-center
                                 align-items-center flex-wrap">
                                    <div class="form-label col-sm-4 col-md-4">
                                        <label for="" class="fs-5 text-start fw-normal">username baru</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <input type="text" name="username" value="" maxlength="100"
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
                                            value="<?php echo $pecah['nama']?>" placeholder="masukkan nama anda ..."
                                            class="form-control" required id="">
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
                                            <img <?php if($_SESSION['foto_emp'] != $pecah['foto']){?>
                                                src="../../assets/<?php echo $pecah['foto']?>" <?php }else{?>
                                                src="../../assets/user_logo.png" <?php } ?> id="preview" alt=""
                                                width="64" class="img-rounded img-fluid">
                                        </div>
                                        <div class="my-1"></div>
                                        <input type="file" name="foto" accept="image/*" class="form-control" required
                                            onchange="previewImage(this)" aria-required="true">
                                        <input type="checkbox" name="ubahfoto" id=""> jika sudah setujui untuk ubah foto
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <button type="submit" aria-current="page" class="btn btn-primary btn-outline-light">
                                        <i class="fas fa-save fa-1x"></i>
                                        <span>Update</span>
                                    </button>
                                    <button type="reset" aria-current="page" class="btn btn-danger btn-outline-light">
                                        <i class="fas fa-eraser fa-1x"></i>
                                        <span>Hapus Semua</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php
                            }       
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("../ui/footer.php"); ?>