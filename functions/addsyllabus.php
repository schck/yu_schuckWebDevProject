<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
    <?php
        //including the database connection file
        include_once("../dbConnection/mysqlconfig_connection.php");
        
        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $author = $_POST['author'];
            $subject = $_POST['subject'];
            // checking empty fields
            if (empty($code) || empty($author)) {
                if (empty($code)) {
                    echo "<font color='red'>Syllabus Code field is empty.</font><br/>";
                }
                if(empty($author)) {
                    echo "<font color='red'>Syllabus Author field is empty.</font><br/>";
                }
                //link to the previous page
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else {
                //if all the fields are filled (not empty)
                //insert data to database
                $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code	, syllabus_author, subject_ID) VALUES ('$code', '$author', '$subject')");
                //display success message
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>