<?php
session_start(); 

$Amount = $Currency = $Pay_Date = $Rec_No= "";


f($_POST['Amount']==$Amount || $_POST['Pay_Date']==$Pay_Date|| $_POST['Rec_No']==$Rec_No)
{
	
echo "missing information";	
}
else{
	$_SESSION['Rec_No']=$Rec_No;
	header("location:home.php");
}


?>