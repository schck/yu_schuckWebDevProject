<?php
    //including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
    //getting id of the data from url
    $id = $_GET['id'];
    //deleting the row from table
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE subject_ID='$id'"); 
    mysqli_query($dbc, "DELETE FROM tblsyllabus WHERE subject_ID='$id'"); 
    //redirecting to the display page (index.php in our case)
    header("Location:../index.php");
?>