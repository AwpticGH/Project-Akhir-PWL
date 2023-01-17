<?php
    $page_for = "all";
    include("../layout/starter.php");

    require_once("../../controller/NotificationsController.php");
    use controller\NotificationsController;

    $notif_controller = new NotificationsController();
    $pstResult = $notif_controller -> readNotifAllByUserId($user['id']);
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
                                <th>Tipe</th>
                                <th>Judul</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
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
                                <td><?= $data['datetime'] ?></td>
                                <td><?= $data['type'] ?></td>
                                <td><?= $data['title'] ?></td>
                                <td><?= $data['notification_text']?></td>
                                <td>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=accept&notif_id=" . $data['notif_id'] . ($data['type'] == "Report") ? "&report_id=" . $data['report_id'] : "&user_id=" . $data['user_id'] ?>" class="btn btn-success">Terima</a>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=reject&notif_id=" . $data['notif_id'] . ($data['type'] == "Report") ? "&report_id=" . $data['report_id'] : "&user_id=" . $data['user_id'] ?>" class="btn btn-danger">Tolak</a>
                                </td>
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
                                <li class="page-item active"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=1" ?>">1</a></li>
                                <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=2" ?>">2</a></li>
                                <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=3" ?>">3</a></li>
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