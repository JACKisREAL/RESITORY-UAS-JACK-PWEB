<?php
session_start();
if(isset($_SESSION['LOGIN'])){
    header("Location:/profile.php");
    exit();
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
</head>
<body>
    <div class="card border-left-primary shadow h-100 py-2">
    <div class="d-flex justify-content-center">SELAMAT DATANG DI HALAMAN REGISTRASI</div>
        <div class="card-body">
        <form action="registerasi.php" method="POST" name="form1" class="form-inline mr-auto w-100 navbar-search">
        <tABLE>
            <tr>
                <div><td> Masukkan ID   </td>
                    <td>: <input type="text" maxlength="20" name="userid" minlength="8" id="username" size="20" placeholder="minimal 8 karakter" min="8" required><br></td></div>
                
            </tr>
            <tr>
                <div>
                <td>Masukkan Password   </td>
                <td>: <input type="password" maxlength="15" size="20" minlength="8" name="pw" id="pw" placeholder="minimal 8 karakter" required><br></td>
                </div>
                
            </tr>
            <tr>
                <td>
                <input type="submit" value="Registrasi" id="reg">   
                <input type="reset" value="reset" id="reset">
                </td>
            </tr>
        </tABLE> 
         <div>
             
         </div>
        </form>  
        </div>
    </div>
</body>
</html>