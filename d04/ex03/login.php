<?php
include "auth.php";
session_start();
$login = $_GET["login"];
$passwd = $_GET["passwd"];
if (auth($login, $passwd)){
    $_SESSION["loggued_on_user"] = $login;
    exit ("OK\n");
}
else
    $_SESSION["loggued_on_user"] = "";
exit("ERROR\n");
?>
