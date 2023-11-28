<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
        <link rel="stylesheet" type="text/css" href="../CSS/stylesheet2.css">
    </head>
<body>
    <h1>Add Subject</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/add.php" method="post" name="form1">
        <table width="40%">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" id="btn"></td>
            </tr>
        </table>
    </form>
</body>
</html>