<?php
session_start();
if(isset($_SESSION['LOGIN'])){
    header("Location:profile.php");
    exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
   <div class="card border-left-primary shadow h-100 py-2">
   <div class="d-flex justify-content-center">SELAMAT DATANG DI HALAMAN LOGIN</div>
       <div class="card-body">
       <form action="inputmysql.php" method="POST" name="form2" class="form-inline mr-auto w-100 navbar-search">
        <table>
            <div>
                <tr>
                    <td>ID</td>
                    <td>        : <input type="text" maxlength="20" size="20" minlength="8" name="ID" placeholder="Masukkan ID" required><br> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>        : <input type="password" maxlength="15" minlength="8" size="20" name="password" id="pass" placeholder="Masukkan Password" required><br> </td>
                        
                    </tr>
                    <tr class="justify-content-center">
                        <td>
                        <input type="submit" value="Log in" name="login">
                        <input type="reset" value="Reset" name="reset">
                        <a href="login.php" style="font-family: arial;color: lightseagreen;">Registrasi</a>
                        </td>
                    </tr>
            </div>       
        </table>
        
   
    </div>

    </form>
   </div>

</body>
</html>