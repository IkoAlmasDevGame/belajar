<?php 
    require_once('database/koneksi.php');
    session_start();
    if(empty($username) == "" || empty($password) == ""){
        header("location:./index.php");
    }else{
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']), false);
        password_verify($password, PASSWORD_DEFAULT);
        # code ...
        $table = "tb_user";
        $sql = "SELECT * FROM $table WHERE username = '$username' and password = '$password'";
        $data = $koneksi->query($sql);
        $cek = mysqli_num_rows($data);

        if($cek > 0){
            $response = array($username, $password);
            $response[$table] = $response;
            if($row = $data->fetch_assoc()){
                if($row['level'] == "pengguna"){
                    $_SESSION['id'] = $row['id_akun'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['foto_emp'] = $row['foto'];
                    $_SESSION['level'] = "pengguna";
                    header("location:page/dashboard/index.php");
                }
                $_SERVER['HTTPS'] = "on";
                $_SESSION['status'] = true;
                $_COOKIE['cookies'] = $username;
                setcookie($response[$table], $row, time() + (86400 * 30), "/");
                array_push($response[$table], $row);
            }
        }else{
            $_SERVER['HTTPS'] = "off";
            $_SESSION['status'] = false;
            header("location:./index.php");
        }
    }
?>