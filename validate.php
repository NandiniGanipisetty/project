<?php
	$server="localhost";
	$un="root";
	$up="";
	$db="loginpage";
	$a=$_POST['nm'];
	$b=$_POST['pw'];
	$c=$_POST['cn'];
	$con=new mysqli($server,$un,$up,$db);
	$qry="Insert into table1(Username,password,comment)VALUES('$a','$b','$c')";
	if($qry=$con->query($qry))
	{
		echo "ThankYou";
	
	}
	else
	{
		echo " check your detailsandtry again";
	}
?>
