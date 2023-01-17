<?php
    $page_for = "all";
    include("../layout/starter.php");

    require_once("../../controller/NotificationsController.php");
    use controller\NotificationsController;

    $notif_controller = new NotificationsController();
    
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['delete'])) {
            $notif_controller -> updateNotificationIsRead($_GET['notification_id']);
        }
        if (isset($_GET['update'])) {
            if ($_GET['update'] == "accept") {
                $notif_controller -> updateNotificationIsRead($_GET['notification_id']);
                $user_controller -> updateAcceptNewEmployee($_GET['notification_by']);
            }
            else {
                $notif_controller -> deleteNotificationById($_GET['notification_id']);
            }
        }
    }
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
                                <!-- <th>Tanggal</th> -->
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
                                <!-- <td><?= $data['datetime'] ?></td> -->
                                <td><?= $data['type'] ?></td>
                                <td><?= $data['title'] ?></td>
                                <td><?= $data['notification_text']?></td>
                                <td>
                                    <?php if ($data['type'] == "User") { ?>
                                        <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?notification_id=" . $data['id'] ."&update=accept&notification_by=" . $data['notification_by'] ?>" class="btn btn-success">Terima</a>
                                        <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?notification_id=" . $data['id'] ."&update=reject&notification_by=" . $data['notification_by'] ?>" class="btn btn-danger">Tolak</a>
                                    <?php } ?>
                                    <?php if ($data['type'] == "Report") { ?>
                                        <a href="../report/show.php?search=<?= $data['notification_text'] ?>" class="btn btn-secondary">Lihat</a>
                                    <?php } ?>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?delete=true&notification_id=" . $data['id'] ?>" class="btn btn-warning">Delete</a>
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