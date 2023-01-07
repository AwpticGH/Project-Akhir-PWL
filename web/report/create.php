<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Report";
            $css_file = "create.css";
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
                <div class="container">
                    <div class="row">
                        <div class="col-12">
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
                                    <br>
                                    <br>
                                    <br>
                                    File
                                </div>
                                <div class="col-6">
                                    08:13
                                    <br>
                                    5 Jan 2023
                                    <br>
                                    Pengembangan Front End
                                    <br>
                                    <br>
                                    <textarea name="keterangan" id="keterangan" cols="30" rows="0"></textarea>
                                    <br>
                                    <br>
                                    <input type="file">
                                </div>
                            </div>
                            <input type="submit" style="margin-top: 16px; font-size: 15px; color: whitesmoke; background: green; margin-left: 490px;  width: 100px; border-radius: 11px; font-size: 20px;" class="btn" name="submit" value="Submit">
                            <a href="index.php" style="margin-top: 16px; background: red; width: 100px; margin-left: 12px; color: whitesmoke; border-radius: 11px; font-size: 20px;" type="submit" class="btn">Cancel</a>
                        </div>
                        <!-- <div class="col-1"> -->
                        
                    </div>
                </div>
                <!-- <div class="container">
                    <h1>halo</h1>
                </div> -->
            </div>
        </div>
        <script src="../../asset/js/darkmode.js"></script>
        <?php include("../layout/script.php");?>
    </body>
</html>
