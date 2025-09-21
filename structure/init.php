<?php
    if (!defined("_VALID_PHP")) {
        die ('Direct access to this location is not allowed.');
    }

    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/misc/Registry.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/config.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/misc/Database.php");

    Registry::set("database", new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME));

    $db = Registry::get("database");
    $db->connect();

    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/system/SystemManager.php");

    Registry::set("system", new SystemManager());

    $system = Registry::get("system");
    $system->configure();

    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/user/User.php");
    
    Registry::set("user", new User());
    
    $user = Registry::get("user");
    $user->configure();

    if (!defined("NO_STRUCT")) {
        $system->displayStruct("header");
    }

    if (defined('login-protect') && !$user->isLoggedIn()) {
        header("Location: /?ref=" . $_SERVER['REQUEST_URI']);
    }
?>