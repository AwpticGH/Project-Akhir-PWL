<nav class="navbar navbar-expand-lg navbar-dark border-bottom">
    <div class="container-fluid">
        <button class="btn" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#"><?= $title ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <img src="../../asset/img/moon.png" alt="iconcoy" id="icon">
            <li class="nav-link"> <box-icon name='bell' color="white" size="30px"></box-icon> </li>
            <li class="dropdown nav-link">
                <button class="btn btn-primary btn-rounded dropdown-toggle" style="background-color: #ADEFD1; color: black;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span> <box-icon size="xs" name='user-circle'></box-icon> Profile </span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            </ul>
        </div>
    </div>
</nav>