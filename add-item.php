<?php
    session_start();
    $seller = $_SESSION['name'];

    $connect=mysqli_connect("localhost","root","","dsc");

    if(isset($_POST['submit-add-item'])){
        $img=$_FILES['image'];
        $name=$_POST['item-name'];
        $cat=$_POST['category'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $timestamp = getdate();
        $pid = "$timestamp[year]"."$timestamp[mon]"."$timestamp[mday]"."$timestamp[hours]"."$timestamp[minutes]"."$timestamp[seconds]";
        $insert="insert into inventory values('$pid','$cat','$price','$stock','$seller','$name')";
        mysqli_query($connect,$insert); 
        echo $img['name'];
        if($img['type']== "image/jpeg"){
            move_uploaded_file($img['tmp_name'],"pid_img/".$pid.".jpg");
            echo "uploaded";
        }
         print_r($img);
        
        
    }
    // header('Location:seller.php');
?>