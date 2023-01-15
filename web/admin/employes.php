<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Employes";
            $css_file = "employes.css";
            include("../layout/header.php");
        ?>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <?php include("../layout/sidebar.php") ?>
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <?php include("../layout/navbar.php") ?>
                <!-- Content -->
                <div class="card4">
                    
                        <!-- <div class="container-table"> -->
                            <table class="table table-striped table-hover" style="border-radius: 0px">
                            <thead class="table hedbel">
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Laporan</th>
                                <th>Tgl/Bln/Thn</th>
                                <th class="layout">
                                    Aksi
                                </th>
                            </tr>
                            </thead>    
                                <tr class="table-body bg-table-body-odd">
                                    <td>1</td>
                                    <td>Rafi Fajar</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-even">
                                    <td>2</td>
                                    <td>Reza ketoprak</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-odd">
                                    <td>3</td>
                                    <td>Fajar senja</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-even">
                                    <td>4</td>
                                    <td>Aldi</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-odd">
                                    <td>5</td>
                                    <td>Ibnu jamal</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-even">
                                    <td>6</td>
                                    <td>Roja energen</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-odd">
                                    <td>7</td>
                                    <td>Alex</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-even">
                                    <td>8</td>
                                    <td>Yusuf ahmad</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                                <tr class="table-body bg-table-body-odd">
                                    <td>9</td>
                                    <td>Yuli sulianti</td>
                                    <td>Total Keuntungan Tahun 2022</td>
                                    <td>21/12/2022</td>
                                    <td>
                                        <center>
                                            <a href="#" class="btn btn-success">View details</a>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="container-page-nav">
                            <nav aria-label="Page-navigation ">
                                <ul class="pagination ">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        <?php include("../layout/script.php") ?>        
    </body>
</html>