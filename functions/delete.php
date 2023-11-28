<?php
    //including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
    //getting id of the data from url
    $id = $_GET['id'];
    //deleting the row from table
    #mysqli_query($dbc, "DELETE FROM tblsubjects WHERE subject_ID='$id'"); 
    #mysqli_query($dbc, "DELETE FROM tblsyllabus WHERE subject_ID='$id'");
    mysqli_query($dbc, "DELETE tblsubjects, tblsyllabus FROM tblsubjects
                   LEFT JOIN tblsyllabus ON tblsubjects.subject_ID = tblsyllabus.subject_ID
                   WHERE tblsubjects.subject_ID = '$id'");

    //redirecting to the display page (index.php in our case)
    header("Location:../index.php");
?>