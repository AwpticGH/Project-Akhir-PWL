<?php
    require("../../controller/UsersController.php");
    use controller\UsersController;

    session_start();
    $user = $_SESSION['user'];
    $user_controller = $_SESSION['user_controller'];

    require("../../middleware/GuardsMiddleware.php");
    use middleware\GuardsMiddleware;

    $middleware = new GuardsMiddleware();
    $middleware -> auth($user);
    if ($page_for == "admin") 
        $middleware -> admin($user);
    else if ($page_for == "employee")
        $middleware -> employee($user);
        
?>