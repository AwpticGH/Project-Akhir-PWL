<?php
   $page_for = "admin";
   include("../layout/starter.php");

   require_once("../../controller/PresencesController.php");
   use controller\PresencesController;

   $presence_controller = new PresencesController();

   if ($_SERVER['REQUEST_METHOD'] == "GET") {
       if (isset($_GET['update'])) {
           if ($_GET['update'] == "accpt") 
               $presence_controller -> updateAcc($_GET['presences_acc']);
           if ($_GET['update'] == "rejct")
               $presence_controller -> updateRej($_GET['presences_rjc']);
       }
   }

   $pstResult = $presence_controller -> readByDivisionId($user['division_id']);
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
                                <th>Keterangan</th>
                                <th>Tgl/Bln/Thn</th>
                                <th>Jam</th>
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
                                <td><?= ($i+1) ?></td>
                                <td><?= $data['first_name'] . " " . $data['last_name'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><?= $data['date_of_presence'] ?></td>
                                <td><?= $data['time_of_presence'] ?></td>
                                <td>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=accpt&presences_acc= " .  $data['id'] ?>" class="btn btn-success">Terima</a>
                                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?update=rejct&presences_rjc= " .  $data['id'] ?>" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <?php include("../layout/pagination.php") ?>
                </div>
            </div>
        </div>
        <?php include("../layout/script.php") ?>        
    </body>
</html>