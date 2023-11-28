<?php
    include_once("./dbConnection/mysqlconfig_connection.php");

    #$query ="SELECT * FROM tblsubjects";
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subject_ID";
    $result = mysqli_query($dbc, $query);
?>