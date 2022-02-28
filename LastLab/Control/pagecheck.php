<?php
session_start();
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["username"]))
        {
            echo "Username can not be empty";
            echo "<br>";
        }
        else{
            $haserror=1;
        }
        if(empty($_POST["password"]))
        {
            echo "Password can not be empty";
        }
        else{
            $haserror=1;
        }
        if($haserror==1)
        {
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];
            header("location:../View/page2.php");
        }
    }
    
?>