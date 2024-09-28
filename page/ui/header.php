 <!DOCTYPE html>
 <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <?php
            session_start();
            require_once("../../config/auth.php");
        ?>
         <title>Dashboard</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.dataTables.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
         <?php 
            if(!isset($_GET['page'])){
            }else{
                switch ($_GET['page']) {
                    case 'profile':
                        require_once("../dashboard/profile.php");
                        break;

                    case 'keluar':
                        if(isset($_SESSION['status'])){                
                            unset($_SESSION['status']);
                            session_unset();
                            session_destroy();
                            $_SESSION = array();
                        }
                        header("location:../../index.php");
                        exit(0);
                        break;
                    
                    default:
                        require_once("../dashboard/index.php");
                        break;
                }
            }
         ?>
     </head>

     <body>