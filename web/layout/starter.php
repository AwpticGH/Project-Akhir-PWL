<?php
    require_once("../../controller/UsersController.php");
    use controller\UsersController;

    session_start();
    $user = $_SESSION['user'];
    $user_controller = $_SESSION['user_controller'];

    require_once("../../middleware/GuardsMiddleware.php");
    use middleware\GuardsMiddleware;

    $middleware = new GuardsMiddleware();
    $middleware -> auth($user);
    if ($page_for == "admin") 
        $middleware -> admin($user);
    else if ($page_for == "employee")
        $middleware -> employee($user);
        
?>