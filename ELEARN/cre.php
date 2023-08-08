<?php

$aa=$_POST['pub'];
$bb=$_POST['name'];

if($aa=="")
{
    echo "Fill All<br>";
    echo "<a href='first.php'>Go Back</a>";

}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("elearn");
    
        $query1="INSERT INTO post VALUES('$bb','$aa')";
        mysql_query($query1);
        header("location:admin.php");
    }
    
?>