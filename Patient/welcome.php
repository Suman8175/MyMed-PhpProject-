<?php
session_start();
if (isset($_SESSION['username'])){
    echo $_SESSION['username'];
    unset($_SESSION['username']);
}
?>