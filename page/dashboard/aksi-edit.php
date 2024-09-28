<?php 
require_once('../../database/koneksi.php');
$lama = htmlspecialchars($_POST['usernamelama']);
$baru = htmlspecialchars($_POST['username']);
$password = md5(htmlspecialchars($_POST['password']), false);
$nama = htmlspecialchars($_POST['nama']);
$ekstensi_diperbolehkan_foto = array('png', 'jpg', 'jpeg', 'jfif', 'gif'); 
$photo_src = htmlentities($_FILES["foto"]["name"]) ? htmlspecialchars($_FILES["foto"]["name"]) : $_FILES["foto"]["name"];
$x_foto = explode('.', $photo_src);
$ekstensi_photo_src = strtolower(end($x_foto));
$ukuran_photo_src = $_FILES['foto']['size'];
$file_tmp_photo_src = $_FILES['foto']['tmp_name'];

$table = "tb_user";
$select = $koneksi->query("SELECT * FROM $table WHERE username = '$lama' order by username asc");
$cek = mysqli_fetch_array($select);

if(in_array($ekstensi_photo_src, $ekstensi_diperbolehkan_foto) === true){
    if($ukuran_photo_src < 10440070){
        move_uploaded_file($file_tmp_photo_src, "../../assets/" . $photo_src);
    }else{
        echo "Tidak Dapat Ter - Upload Size Gambar";
        exit;                
    }
}else{
    echo "Tidak Dapat Ter - Upload Gambar";
    exit;
}

if($cek['username'] > 0){
    if(isset($_POST['ubahfoto'])){
        if($cek['foto'] == ""){
            $update = "UPDATE $table SET username = '$baru', password = '$password', nama = '$nama', foto = '$photo_src', level = 'pengguna' WHERE username = '$lama'";
            $data = $koneksi->query($update);
            if($data != ""){
                if($data){
                    header("location:../dashboard/index.php");
                }
            }else{
                header("location:../ui/header.php?page=profile&username=$lama");
            }
        }elseif($cek['foto'] != ""){
            if($photo_src != ""){
                unlink("../../assets/$cek[foto]");
                $updated = "UPDATE $table SET username = '$baru', password = '$password', nama = '$nama', foto = '$photo_src', level = 'pengguna' WHERE username = '$lama'";
                $data = $koneksi->query($updated);
                if($data != ""){
                    if($data){
                        header("location:../dashboard/index.php");
                    }
                }else{
                    header("location:../ui/header.php?page=profile&username=$lama"); 
                } 
            }
        }
    }
}else{
    header("location:../ui/header.php?page=profile&username=$lama");
}

?>