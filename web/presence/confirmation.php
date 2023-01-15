<?php
   $page_for = "admin";
   include("../layout/starter.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Konfirmasi Presensi Karyawan";
            $css_file = "presence/confirmation.css";
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
                <div class="container">
                    <div class="container-table">

                        <table>
                            <tr class="table-header bg-table-header">
                                <th>#</th>
                                <th>Karyawan</th>
                                <th>Tgl/Bln/Thn</th>
                                <th>Jam</th>
                                <th>Aksi</th>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>1</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>2</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>3</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>4</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>5</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>6</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>7</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>8</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>9</td>
                                <td>Rafi Fajar</td>
                                <td>21/12/2022</td>
                                <td>07:59</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="container-page-nav">
                        <nav aria-label="Page-navigation ">
                            <ul class="pagination  ">
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