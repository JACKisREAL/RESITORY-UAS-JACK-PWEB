<?php

include "koneksi.php";
$reseult=mysqli_query($link,"SELECT * FROM tb_data where userid='$_POST[userid]' ");
$cek=mysqli_num_rows($reseult);
if($cek>0){
    echo '<script language="javascript">
    alert("username ini telah digunakan");
    window.location="login.php";
    </script>';
    exit();
}
else{
    mysqli_query($link,"INSERT INTO tb_data (userid,pw) Values('$_POST[userid]', md5('$_POST[pw]'))");
    echo '<script language="javascript">
    alert("AKUN ANDA TELAH TERDAFTAR");
    window.location="login2.php";
    </script>';
    exit();
}



?>