<?php
   $page_for = "employee";
   include("../layout/starter.php");

   require_once("../../controller/PresencesController.php");
   use controller\PresencesController;

   $presences_controller = new PresencesController();
   $pstResult = $presences_controller -> readByUserId($user['id']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "status absen";
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
                                <th>keterangan</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                            </tr>
                            <?php
                                $page = (isset($_GET['page'])) 
                                        ? $_GET['page'] 
                                        : 1;
                                $pagination = (mysqli_num_rows($pstResult) > 5) 
                                            ? 5 
                                            : mysqli_num_rows($pstResult);
                                $index = $pagination * ($page - 1);
                                
                                for ($i = $index; $i < $pagination * $page; $i++) {
                                    $data = $pstResult -> fetch_array(MYSQLI_BOTH);
                            ?>
                            <tr class="table-body bg-table-body-odd">
                                <td><?= ($i+1) ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><?= $data['date_of_presence'] ?></td>
                                <td><?= $data['time_of_presence'] ?></td>
                                <td>diterima</td>
                            </tr>
                            <?php } ?>
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