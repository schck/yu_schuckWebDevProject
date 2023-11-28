<?php 
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
        <link rel="stylesheet" type="text/css" href="./CsS/stylesheet.css">
    </head>
    <body>
        <h1> My Subjects </h1>
        <a href="forms/addform.php">Add Subject</a><br/><br/>
        <a href="forms/addsyllabusform.php">Add Syllabus</a><br/><br/>
        <table width='100%' border=1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Subject Code </td>
                <td>Subject Name </td>
                <td>Syllabus ID</td>
                <td>Syllabus Code</td>
                <td>Syllabus Author</td>
                <td>Action</td>
            </tr>
            <?php
                while ($res = mysqli_fetch_assoc($result)) {
                    echo"<tr>";
                    echo"<td>".$res["subject_ID"]."</td>";
                    echo"<td>".$res["subject_Code"]."</td>";
                    echo"<td>".$res["subject_Name"]."</td>";
                    echo"<td>".$res["syllabus_id"]."</td>";
                    echo"<td>".$res["syllabus_code"]."</td>";
                    echo"<td>".$res["syllabus_author"]."</td>";
                    echo"<td><a href=\"forms/editform.php?id=$res[subject_ID]\">Edit</a> |
                        <a href=\"functions/delete.php?id=$res[subject_ID]\" onClick =\"return confirm('Are you sure you want to delete')\">Delete</a></td>";
                }
            ?>
        </table>
    </body>
</html>