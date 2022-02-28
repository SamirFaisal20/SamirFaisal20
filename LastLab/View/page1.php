<?php
    include"../Control/pagecheck.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
</head>
<body>
    <h3>Registration Page</h3>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td>Username :</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td>Password :</td>
        <td><input type="password" name="password"></td>
        </tr>
    </table>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>