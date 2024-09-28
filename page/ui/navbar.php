<?php 
if($_SESSION['level'] == ""){
    header("location:./index.php");
}
?>

<?php 
if($_SESSION['level'] == "pengguna"){
?>
<div class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <header class="header-nav">
            <a href="../dashboard/index.php" aria-current="page"
                class="navbar-brand fst-normal fs-5 fw-semibold text-primary">Belajar PHP & MYSQLI</a>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarToggle" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>

        <div class="collapse navbar-collapse" id="navbarToggle">
            <ul class="navbar-nav ms-auto mb-1 mb-lg-1">
                <li class="nav-item">
                    <a href="../dashboard/index.php" aria-current="page" class="nav-link fs-5 hover">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../ui/header.php?page=profile&id=<?php echo $_SESSION['id']?>"
                        onclick="return confirm('Apakah kamu ingin mengedit data profile pribadimu ?')"
                        aria-current="page" class="nav-link fs-5 hover">
                        Edit Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../ui/header.php?page=keluar" onclick="return confirm('Apakah kamu ingin keluar ?')"
                        aria-current="page" class="nav-link fs-5 hover">
                        Logout
                    </a>
                </li>
            </ul>
            <!--  -->
            <?php require_once("../../database/koneksi.php"); ?>
            <?php $foto = $koneksi->query("SELECT * FROM tb_user WHERE id_akun = '$_SESSION[id]'"); ?>
            <?php $data = mysqli_fetch_array($foto); ?>
            <ul class="navbar ms-auto mb-1 mb-lg-1">
                <a class='img-thumbnail'>
                    <img class='img-responsive' alt="<?php echo $data['nama']?>"
                        src='../../assets/<?php echo $data['foto'];?>' width="32">
                </a>
            </ul>
        </div>
    </div>
</div>
<?php
}else{
    header("location:./index.php");
}
?>