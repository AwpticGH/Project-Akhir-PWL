<center>
<div class="container-page-nav">
    <nav aria-label="Page-navigation ">
        <ul class="pagination">
            <?php
                $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
            ?>
            <li class="page-item <?= ($page == 1) ? "disabled" : "" ?>">
                <a class="page-link" href="<?php $page--; echo htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$page"; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=1" ?>">1</a></li>
            <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=2" ?>">2</a></li>
            <li class="page-item"><a class="page-link" href="<?= htmlspecialchars($_SERVER['PHP_SELF']) . "?page=3" ?>">3</a></li>
            <li class="page-item">
                <a class="page-link" href="<?php $page += 2; echo htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$page"; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</center>