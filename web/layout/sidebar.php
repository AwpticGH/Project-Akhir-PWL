<div class="border-end " id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom"><i class='bx bxs-pencil'></i>&nbsp; E-Kinerja</div>
    <div class="list-group list-group-flush">
        <?php if ($user['position_id'] == "1") { ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="../admin/dashboard.php">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../presence/confirmation.php">Confirm Presence</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../report/show.php">Check Reports</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../auth/show.php?id=<?= $user['id'] ?>">Profile</a>
        <?php } ?>
        <?php if ($user['position_id'] == "2") { ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="../employee/dashboard.php">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../presence/create.php">Presence</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../report/create.php">Make Report</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../auth/show.php?id=<?= $user['id'] ?>">Profile</a>
        <?php } ?>
    </div>
</div>