<?php include ('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Studi Kasus 1 Arvel</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/css1/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar TIme -->
                    <div class="input-group">
                        <a class="m-0 font-weight-bold text-primary">
                                <span id="datetime"></span>
                        </a>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Arvel Gavrilla Raissananda</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/profile2.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <a class="dropdown-item" href="../index.html">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>                     
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Tabel</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Bulan</th>
                                                <th scope="col">Gaji</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql = "SELECT * FROM salary";
                                            $query = mysqli_query ($db_connection, $sql);
                                            
                                            while($salary = mysqli_fetch_array($query)){
                                                echo "<tr>";
                                                
                                                echo "<td>".$salary['id']."</td>";
                                                echo "<td>".$salary['bulan']."</td>";
                                                echo "<td>".$salary['jumlah']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h4 class="m-0 font-weight-bold text-primary">Diagram</h4>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div >
                                        <canvas  id="chartjs_bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Arvel Gavrilla 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/js1/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/js1/demo/chart-area-demo.js"></script>
    <script type="text/javascript">

        function GetClock(){
        d = new Date();
        date = d.getDate();
        year = d.getFullYear();
        month = d.getMonth();
        var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
        month = monthArr[month];

        nhour  = d.getHours();
        nmin   = d.getMinutes();
        nsec   = d.getSeconds();

        if(nhour ==  0) {
            ap = " AM";nhour = 12;
        } 

        else if(nhour <= 11) {
            ap = " AM";
        } 

        else if(nhour == 12) {
            ap = " PM";
        } 

        else if(nhour >= 13) {
            ap = " PM";nhour -= 12;
        }
        
        if(nmin <= 9) {nmin = "0" +nmin;}
            document.getElementById('datetime').innerHTML=" "+date+" "+month+" "+year+" | "+nhour+":"+nmin+":"+nsec+" "+ap+" ";
            setTimeout("GetClock()", 1000);
        }
        window.onload=GetClock;

        var ctx = document.getElementById("chartjs_bar");
            var chartjs_pie = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: 'Pendapatan Pegawai Per Bulan',
                            data: [<?php while ($p = mysqli_fetch_array($jumlah)) { echo '"' . $p['jumlah'] . '",';}?>],
                            backgroundColor: [
                                '#000D6B',
                                '#9C19E0',
                                '#FF5DA2',
                                '#99DDCC',
                                '#B91646',
                                '#DFD8CA',
                                '#105652',
                                '#3F3351',
                                '#864879',
                                '#E9A6A6',
                                '#FEE440',
                                '#1C7947'
                            ],
                            borderColor: [
                                '#000D6B',
                                '#9C19E0',
                                '#FF5DA2',
                                '#99DDCC',
                                '#B91646',
                                '#DFD8CA',
                                '#105652',
                                '#3F3351',
                                '#864879',
                                '#E9A6A6',
                                '#FEE440',
                                '#1C7947'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
    </script>
</body>









