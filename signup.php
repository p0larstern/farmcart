<?php
$connect=mysqli_connect("localhost","root","","dsc");
if ($connect) {
	echo "connected";
}
else{
	echo "NOT CTED";
}
echo "1st step";
if(isset($_POST['frm-signin'])){
	
	$name=$_POST['frm-name'];
	$frm_add=$_POST['frm-add'];
	$pno=$_POST['frm-pno'];
	$email=$_POST['frm-mail'];
	$pwd=$_POST['frm-pwd'];
	echo "<br>ENROLL ".$pno."<br>"."NAME ".$name."<br>EMAIL ".$email."<br>PASSWORD ".$pwd."<br>";
	$insert="insert into farmer values($pno,'$name','$email','$pwd','$frm_add')";
	mysqli_query($connect,$insert);
	$_SESSION['name']=$name;
	header('Location:user.php');
	die();
}

if(isset($_POST['crp-signin'])){
	echo "2nd step";
	$name=$_POST['crp-name'];
	$crp_add=$_POST['crp-add'];
	$crp_pno=$_POST['crp-pno'];
	$email=$_POST['crp-mail'];
	$pwd=$_POST['crp-pwd'];
	echo "<br>pno ".$crp_pno."<br>"."NAME ".$name."<br>EMAIL ".$email."<br>PASSWORD ".$pwd."<br>";
	$insert="insert into corp values('$name',$crp_pno,'$crp_add','$email','$pwd')";
	mysqli_query($connect,$insert);
	$_SESSION['name']=$name;
	header('Location:seller.php');
}
?>