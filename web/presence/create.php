<?php 
    $page_for = "employee";
    include("../layout/starter.php") 
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

            <!-- Page content-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card1">
                            <div class="card2">
                                Presensi kehadiran
                            </div>
                            <?php
                                $time = date("H:i:s");
                                $date = date("Y-m-d");
                            ?>
                            <div class="col-3">
                                <div style="font-weight: bold;: ">Time</div>
                                <div style="margin-top: 20px; font-weight: bold;: ">Date </div>
                                <div style="margin-top: 30px; font-weight: bold;">Action </div>
                            </div>
                            <div class="col-6">
                                <div style="font-weight: bold;: "><?= $time ?></div>
                                <div style="margin-top: 20px;font-weight: bold;"> <?= $date ?> </div>
                                <div style="margin-top: 20px;">
                                    <ul>
                                        <li> <a style="background: #038700; width: 100px; color: #F5F5F5; border-radius: 25px; font-size: 20px;font-weight: bold;"
                                                href="index.php" type="submit" class="btn">Masuk</a> </li>
                                        <li> <a style="background: #CDAC39; width: 100px; margin-left: 12px; color: #F5F5F5; border-radius: 25px; font-size: 20px;font-weight: bold;"
                                                href="index.php" type="submit" class="btn">Izin</a></li>
                                        <li> <a style="background: #FF0000; width: 100px; margin-left: 12px; color: #F5F5F5; border-radius: 25px; font-size: 20px;font-weight: bold;"
                                                href="index.php" type="submit" class="btn">Sakit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../layout/script.php");?>
</body>

</html>