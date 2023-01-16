<nav class="navbar navbar-expand-lg navbar-dark border-bottom">
    <div class="container-fluid">
        <button class="btn" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#"><?= $title ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <img src="../../asset/img/moon.png" alt="iconcoy" id="icon">
                <li class="nav-link"> 
                    <a href="../notification/index.php"><box-icon name='bell' color="white" size="30px"></box-icon></a>
                </li>
                <li class="dropdown nav-link">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" style="background-color: #ADEFD1; color: black; border-radius: 12px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span> <box-icon size="15px" name='user-circle'></box-icon> Profile </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../auth/show.php?id=<?= $user['id'] ?>">Edit Profile</a></li>
                            <hr>
                            <li><a class="dropdown-item" style="color: red; font-size: 18px;" href="../auth/index.php?logout=true"><i class='bx bx-log-out-circle'></i>Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>