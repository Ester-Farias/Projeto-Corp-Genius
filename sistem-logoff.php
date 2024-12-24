<?php
    session_start(); 
    unset($_SESSION['x']);
    session_destroy();
    header('Location: index.php');
?>