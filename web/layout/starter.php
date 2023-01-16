<?php
    require_once("../../controller/UsersController.php");
    use controller\UsersController;

    require_once("../../middleware/GuardsMiddleware.php");
    use middleware\GuardsMiddleware;

    session_start();
    $middleware = new GuardsMiddleware();
    $middleware -> auth($_SESSION['user']);
    
    $user = $_SESSION['user'];
    $user_controller = $_SESSION['user_controller'];
    
    if ($page_for == "admin") 
        $middleware -> admin($user);
    else if ($page_for == "employee")
        $middleware -> employee($user);
    
?>