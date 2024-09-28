<?php
    require_once('database/koneksi.php');
    $username = htmlspecialchars($_POST['username']);
    $password = md5(htmlspecialchars($_POST['password']), false);
    $nama = htmlspecialchars($_POST['nama']);
    $ekstensi_diperbolehkan_foto = array('png', 'jpg', 'jpeg', 'jfif', 'gif'); 
    $photo_src = htmlentities($_FILES["foto"]["name"]) ? htmlspecialchars($_FILES["foto"]["name"]) : $_FILES["foto"]["name"];
    $x_foto = explode('.', $photo_src);
    $ekstensi_photo_src = strtolower(end($x_foto));
    $ukuran_photo_src = $_FILES['foto']['size'];
    $file_tmp_photo_src = $_FILES['foto']['tmp_name'];
    # code ...
    $table = "tb_user";
    $select = $koneksi->query("SELECT * FROM $table WHERE username = '$username' order by username asc");
    $cek = mysqli_num_rows($select);
    if(in_array($ekstensi_photo_src, $ekstensi_diperbolehkan_foto) === true){
        if($ukuran_photo_src < 10440070){
            move_uploaded_file($file_tmp_photo_src, "./assets/" . $photo_src);
        }else{
            echo "Tidak Dapat Ter - Upload Size Gambar";
            exit;                
        }
    }else{
        echo "Tidak Dapat Ter - Upload Gambar";
        exit;
    }
    
    if($cek){
        if($username != ""){
            header("location:./register.php");
        }
    }else{
        $insert = "INSERT INTO $table SET username = '$username', password = '$password', nama = '$nama', foto = '$photo_src'";
        $data = $koneksi->query($insert);
        if($data != ""){
            if($data){
                header("location:./index.php");
            }
        }else{
            header("location:./register.php");
        }
    }
?>