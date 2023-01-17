<?php 
    $page_for = "employee";
    include("../layout/starter.php");

    require_once("../../controller/ReportsController.php");
    use controller\ReportsController;
    require_once("../../controller/NotificationsController.php");
    use controller\NotificationsController;

    $reports_controller = new ReportsController();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $created = $reports_controller -> create($_POST['title'], $_POST['description'], $user['id']);

        if ($created) {
            $pstResult_heads = $user_controller -> readHeadsByDivisionId($user['division_id']);

            while ($head = $pstResult_heads -> fetch_array()) {
                $notif_title = "Laporan Telah Diterima";
                $notif_text = $_POST['title'];
                $notif_by = $user['id'];

                $notif_for = $head['id'];
                
                $notif_controller = new NotificationsController();
                $notifResultSent = $notif_controller -> createnotifreport($notif_title, $notif_text, $notif_for, $notif_by);
            }
        }
        $reports_controller -> message = ($created) ? "Berhasil Upload" : "Gagal Upload";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Report";
            $css_file = "report/create.css";
            include("../layout/header.php");
        ?>
        <style>
            /* width */
            ::-webkit-scrollbar {
            width: 10px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey; 
            background: #0000; 
            border-radius: 21px;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: -webkit-linear-gradient(90deg, hsla(221, 45%, 73%, 1) 0%, hsla(220, 78%, 29%, 1) 100%);
            border-radius: 21px;
            }
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: -webkit-linear-gradient(90deg, hsla(221, 45%, 73%, 1) 0%, hsla(220, 78%, 29%, 1) 100%); 
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include("../layout/sidebar.php")?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include("../layout/navbar.php")?>
                
                <!-- Page content-->
                <?php if ($reports_controller->message != "") { ?>
                    <script>
                        alert('<?= $reports_controller->message ?>')
                    </script>
                <?php } ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                                $time = date("H:i:s");
                                $date = date("Y-m-d");
                            ?>
                            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="post">
                                <div class="card1">
                                    <div class="card2">
                                        Submit Laporan
                                    </div>
                                    <div class="col-3">
                                        Time
                                        <br>
                                        Date
                                        <br>
                                        Judul Laporan
                                        <br>
                                        <br>
                                        Keterangan
                                    </div>
                                    <div class="col-6">
                                        <?= $time ?>
                                        <br>
                                        <?= $date ?>
                                        <br>
                                        <input type="text" name="title" id="title" required>
                                        <br>
                                        <br>
                                        <textarea name="description" id="keterangan" cols="100" rows="4" style="max-width: 50rem;"></textarea>
                                    </div>
                                </div>
                                <input type="submit" style="margin-top: 16px; font-size: 15px; color: whitesmoke; background: green; margin-left: 490px;  width: 100px; border-radius: 11px; font-size: 20px;" class="btn" name="submit" value="Submit">
                                <a href="../employee/dashboard.php" style="margin-top: 16px; background: red; width: 100px; margin-left: 12px; color: whitesmoke; border-radius: 11px; font-size: 20px;" type="submit" class="btn">Cancel</a>
                            </form>
                        </div>
                        <!-- <div class="col-1"> -->
                        
                    </div>
                </div>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <?php include("../layout/script.php");?>
    </body>
</html>
