<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["ID"]);
session_destroy();
header("location: index.php");

?>