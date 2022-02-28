<?php
    include"../Control/page2check.php";
?>
<!DOCTYPE html>
<head>
    <title>Page2</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
                <tr>
                    <td>Designation:</td>
                    <td><input type="radio" name="desination">Junior Programmer
                    <input type="radio" name="desination">Senior Programmer
                    <input type="radio" name="desination">Project Lead
                    </td>
                </tr>
                <tr>
                    <td>Peferred language:</td>
                    <td><input type="checkbox" name="language">JAVA
                    <input type="checkbox" name="language">PHP
                    <input type="checkbox" name="language">C++
                    </td>
                </tr>
                <tr>
                <td>Please attach the file :</td>
                <td><input type="file" name="myfile"></td>
                </tr>
        </table>
                    <input type="submit" value="submit" name="submit2">
    </form>
</body>
</html>