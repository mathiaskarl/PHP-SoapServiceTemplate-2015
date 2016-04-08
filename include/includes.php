<?php
    require_once "include/datamodel.php";
    require_once "include/SoapService1.php";
    require_once "include/handlers/pageHandler.php";
    require_once "include/handlers/errorHandler.php";
    require_once "include/handlers/paginationHandler.php";
    
    $pageHandler = new PageHandler();
    $paginationHandler = new PaginationHandler();
?>