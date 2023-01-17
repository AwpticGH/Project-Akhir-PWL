<?php
    $page_for = "admin";
    include("../layout/starter.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            $title = "Employees";
            $css_file = "admin/employee.css";
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
            <center>
                <div class="card4">

                    <!-- <div class="container-table"> -->
                    <table class="table table-striped table-hover" style="border-radius: 0px">
                        <thead class="table hedbel">
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th class="layout">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <?php
                            $pstResult = $user_controller -> readEmployeesByDivisionId($user['division_id']);

                            $page = (isset($_GET['page'])) 
                                    ? $_GET['page'] 
                                    : 1;
                            $pagination = (mysqli_num_rows($pstResult) > 5) 
                                        ? 5 
                                        : mysqli_num_rows($pstResult);
                            $index = $pagination * ($page - 1);
                            $row = 0;

                            for ($i = $index; $i < $pagination; $i++) {
                                $row++;
                                $data = $pstResult -> fetch_array();
                        ?>
                        <tr class="table-body bg-table-body-odd">
                            <td><?= $row ?></td>
                            <td><?= $data['first_name'] . " " . $data['last_name'] ?></td>
                            <td><?= $data['division_name'] ?></td>
                            <td><?= $data['position_name'] ?></td>
                            <td>
                                <center>
                                    <a href="employee_detail.php?user_id=<?= $data['user_id'] ?>" class="btn btn-success">View details</a>
                                </center>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="card-pagination">
                    <nav aria-label="Page-navigation">
                        <ul class="pagination">
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
    </center>
    </div>
    <?php include("../layout/script.php") ?>
</body>
</html>