<?php 
    $page_for = "employee";
    include("../layout/starter.php");

    require_once("../../controller/PresencesController.php");
    use controller\PresencesController;

    $presence_controller = new PresencesController();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $createabsen = $presence_controller -> create($_POST['keterangan'],$_POST['date_of_presence'], $user['id']);
        $presence_controller -> message = ($createabsen) ? "Berhasil Meminta absen" : "Gagal Absen";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
            $title = "Presensi";
            $css_file = "presence/create.css";
            include("../layout/header.php");
        ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php include("../layout/sidebar.php")?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php include("../layout/navbar.php")?>

            <?php if ($presence_controller -> message != "") { ?>
                    <script>
                        alert('<?= $presence_controller -> message ?>')
                    </script>
                <?php } ?>
            <!-- Page content-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" method="post">
                            <div class="card1">
                                <div class="card2">
                                    Presensi kehadiran
                                </div>
                                <?php
                                    $time = date("H:i:s");
                                    $date = date("Y-m-d");
                                ?>
                                <div class="col-2">
                                    <div style="font-weight: bold;: ">Keterangan</div>
                                    <br>
                                    <div style="font-weight: bold;: ">Date-Time</div>
                                    <div style="margin-top: 30px; font-weight: bold;">Action </div>
                                </div>
                                <div class="col-6">
                                        <input type="text" name="keterangan" id="keterangan" required>
                                        <br>
                                        <br>
                                        <input type="datetime-local" name="date_of_presence" id="date_of_presence" required>
                                        <br>
                                        <br>
                                        <input type="submit" style="background: #038700; width: 100px; color: #F5F5F5; border-radius: 25px; font-size: 20px;font-weight: bold;" class="btn" name="submit" value="Absen">
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../layout/script.php");?>
</body>

</html>