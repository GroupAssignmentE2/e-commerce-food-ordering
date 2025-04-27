<?php 

    session_start();
    session_unset();
    session_destroy();

    require "global-config.php";

    echo "<script> window.location.href='".APPURL."/admin-panel/admins/login-admins.php'; </script>";
