<?php
session_start();

$n=$_POST['email'];
$o=$_POST['password'];

$_SESSION['email']=$n;
$_SESSION['password']=$o;

mysql_connect("localhost","root","");
mysql_select_db("elearn");

$query="SELECT * FROM admin WHERE email='$n' AND password='$o'";
$result=mysql_query($query);
$row=mysql_num_rows($result);




if(password==""||email=="")
{
	echo " Plz fill all fields ";
	echo "<a href='log.php'> Try Again</a>";
}

else
{
	if($row==0)
	{

	
	
		header("location:not.php");
	
}
else
{
	header("location:admin.php");
	echo"<center><a href='logout.php'>LOGOUT</a></center>";	
}
}

?>