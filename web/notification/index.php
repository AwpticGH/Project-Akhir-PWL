<?php
    $page_for = "all";
    include("../layout/starter.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Notifikasi";
            $css_file = "notification/index.css";
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
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>10/01/2023</td>
                                <td>Penerimaan Karyawan Baru</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illo temporibus suscipit cum recusandae saepe aperiam corporis est omnis dolorem, perspiciatis maxime ea cumque, tempora vero atque nostrum alias optio.</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>11/01/2023</td>
                                <td>Konfirmasi Laporan</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rerum voluptatem dignissimos ex ipsam quas magnam sint reprehenderit est earum, et dolore consectetur, veniam autem cumque rem debitis nobis quae.</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>10/01/2001</td>
                                <td>Penerimaan Karyawan Baru</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illo temporibus suscipit cum recusandae saepe aperiam corporis est omnis dolorem, perspiciatis maxime ea cumque, tempora vero atque nostrum alias optio.</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-even">
                                <td>11/01/2023</td>
                                <td>Konfirmasi Laporan</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rerum voluptatem dignissimos ex ipsam quas magnam sint reprehenderit est earum, et dolore consectetur, veniam autem cumque rem debitis nobis quae.</td>
                                <td>
                                    <a href="#" class="btn btn-success">Terima</a>
                                    <a href="#" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr class="table-body bg-table-body-odd">
                                <td>10/01/2001</td>
                                <td>Penerimaan Karyawan Baru</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illo temporibus suscipit cum recusandae saepe aperiam corporis est omnis dolorem, perspiciatis maxime ea cumque, tempora vero atque nostrum alias optio.</td>
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