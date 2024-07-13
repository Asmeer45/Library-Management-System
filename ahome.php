<?php
session_start();
include "database.php";
function countRecord($sql,$db){
    $res = $db ->query($sql);
    return $res->num_rows;
}

if(!isset($_SESSION["ID"])){
    header("location: alogin.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Library Management</title>
        <link rel ="stylesheet" type="text/css" href="css/style.css">
        <body>
            <div id = "container">
                <div id = "header">
                    <h1>E-Library Management System</h1>
                </div>
                <div id = "wrapper">
                    <h3 id="heading">Welcome Admin</h3>
                   <div id="center">
                    <ul class ="record">
                        <li>Total Student : <?php echo countRecord("select * from student", $db); ?></li>
                        <li>Total Books : <?php echo countRecord("select * from book", $db); ?></li>
                        <li>Total Request : <?php echo countRecord("select * from request", $db); ?></li>
                        <li>Total Comments : <?php echo countRecord("select * from comment", $db); ?></li>
                    </ul>                  
                   </div> 
                        </div>
                <div id = "navi">
                    <?php 
                        include "adminBar.php"
                        ?>
                </div>
                <div id = "footer">
                    <p>Copyright &copy; Library Management 2023</p>
                </div>
            </div>
        </body>
    </head>
</html>