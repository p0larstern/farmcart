<?php
$connect=mysqli_connect("localhost","root","","dsc");

if(isset($_REQUEST['frm-login'])){
	$pno=$_REQUEST['frm-pno'];
	$pwd=$_REQUEST['frm-lpwd'];

	$select=mysqli_query($connect , "select * from farmer");

	if(mysqli_num_rows($select)>0){
		while($row=mysqli_fetch_assoc($select)){
			if($row['frm_email']==$pno && $row['frm_password']==$pwd){
				// echo "correct";
				session_start();
				$_SESSION['name']=$row['frm_name'];
				// $_SESSION['pno']=$row['frm_pno'];
				// echo "name from session is ".$_SESSION['name'];
				redirect("user.php");
				die();
			}
		}
	}
}

if(isset($_REQUEST['crp-login'])){
	$email=$_REQUEST['crp-lmail'];
	$pwd=$_REQUEST['crp-lpwd'];

	$select=mysqli_query($connect , "select * from corp");

	if(mysqli_num_rows($select)>0){
		while($row=mysqli_fetch_assoc($select)){
			if($row['corp_email']==$email && $row['corp_password']==$pwd){
				session_start();
				$_SESSION['name']=$row['crp_name'];
				// echo "name from session is ".$_SESSION['name'];
				redirect("seller.php");
				die();
			}
		}
	}
}
function redirect($url)
{
   header('Location: ' . $url);
   die();
}
?>