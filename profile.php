<?php
session_start();
if(!(isset($_SESSION['LOGIN']))){
    header("location:alert.html");
}
if(isset($_GET['out'])){
    $out=$_GET['out'];
    if($out == "keluar"){
        if(isset($_SESSION['LOGIN'])){
            unset($_SESSION['LOGIN']);
            session_unset();
            session_destroy();
            $_SESSION=array();
            }
    header("location:home.html");
    exit();}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/8e23d86a11.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-10 static-top shadow">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> 
                    </li>
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1" style="margin-top: -19px;">
                        <a class="nav-link dropdown-toggle" href="home.html" id="messagesDropdown">
                            <i class="fas fa-home fa-2x"></i><h2 style="margin-top: 19px;">HOME</h2>
                        </a>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow mx-1" style="margin-top: -19px;">
                        <a class="nav-link dropdown-toggle" href="profile.php" id="messagesDropdown">
                            <i class="fas fa-users fa-2x"></i><h2 style="margin-top: 19px;">ABOUT ME</h2>
                        </a>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-2x"></i> <i class="fas fa-arrow-down fa-1x"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile.php?out=keluar">LOGOUT</a>
                            </div>
                          </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;"><b>DESKRIPSI JURUSAN TEKNIK INFORMATIKA </b></h2></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <p class="text-justify">
                Teknik Informatika merupakan bidang ilmu yang mempelajari 
                bagaimana menggunakan teknologi komputer secara optimal guna
                menangani masalah transformasi atau pengolahan data dengan
                proses logika. Selama kuliah kamu akan banyak mengkaji pemrograman
                dan komputasi. Tentunya kamu akan dibekali dengan keterampilan
                merancang perangkat lunak. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;">
                <b>ALASAN MASUK PRODI TEKNIK INFORMATIKA</b>
            </h2>
        </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <p>
                ingin menjadi orang yang berguna dan tidak menjadi beban masyarakat
            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;"><b>SOSIAL MEDIA</b></h2>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <p>
                Facebook        :Lazuardi imam santosa <br>
                Instagram       :@Lazuardi.imam4 <br>
                Twitter         :@Lanxys3 <br>
                WhatsApp        :085641921127 <br>
                Gmail           :lazuardi2000018142@webmail.uad.ac.id <br>
                Youtube         :LAZUARDI -18142 <br>
            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <<h2 style="text-align: left; font-family: sans-serif;"><b>BIODATA</b></h2>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <p>
                Nama             :      lazuardi Imam Santosa <br>
                NIM                :    2000018142<br>
                Alamat            :     Temanggung<br>
                Cita-cita          :    Penetration Tester<br>
            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</body>
</html>