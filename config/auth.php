<?php 
if(isset($_SESSION["status"])){
    if(isset($_SESSION["id"])){
        if(isset($_SESSION["username"])){
            if(isset($_SESSION["nama"])){
                if(isset($_SESSION['foto_emp'])){
                    if(isset($_SESSION["level"])){
                        if(isset($_COOKIE['cookies'])){
                            if(isset($_SERVER['HTTPS'])){
                                
                            }
                        }
                    }
                }
            }
        }
    }
}else{
   echo "<script lang='javascript'>
    window.setTimeout(() => {
        alert('Maaf anda gagal masuk ke halaman utama ...'),
        window.location.href='../../index.php'
    }, 3000);
    </script>
    ";
    die;
    exit(0);
}
?>