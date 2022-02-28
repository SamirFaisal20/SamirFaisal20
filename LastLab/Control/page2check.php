<?php
session_start();
echo $_SESSION["username"];
echo $_SESSION["password"];

$haseorror2=0;
if(isset($_POST["submit2"]))
{
    if(isset($_POST["d"]))
    {
        $haseorror2=0;
        echo "Designation : ".$_POST["d"];
        echo "<br>";
    }
    if(isset($_POST["language1"]) || isset($_POST["language2"]) || isset($_POST["language3"]))
    {
        $haseorror2=0;
        if(isset($_POST["language1"]))
        {
            echo $_POST["language1"]." ";
        }
        if(isset($_POST["language2"]))
        {
            echo $_POST["language2"]." ";
        }
        if(isset($_POST["language3"]))
        {
            echo $_POST["language3"]." ";
        }
    }
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$_FILES["myfile"]["name"]))
        {
            $haseorror2=0;
            echo "File Uploaded";
        }
    if($haseorror2==0)
    {
        header("location:../View/page3.php");
    }
}

?>