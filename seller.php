<?php
    session_start();
    $seller = $_SESSION['name'];
    $connect=mysqli_connect("localhost","root","","dsc");

    // if(isset($_POST['submit-add-item'])){
    //     $name=$_POST['item-name'];
    //     $cat=$_POST['category'];
    //     $price=$_POST['price'];
    //     $stock=$_POST['stock'];
    //     $timestamp = getdate();
    //     $pid = "$timestamp[year]"."$timestamp[mon]"."$timestamp[mday]"."$timestamp[hours]"."$timestamp[minutes]"."$timestamp[seconds]";
    //     $insert="insert into inventory values('$pid','$cat','$price','$stock','$seller','$name')";
    //     mysqli_query($connect,$insert);
        
        
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SELL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="src/css/stylehome.css">
    
</head>
<body>
    
<!-- ==============================================| HEADER |================================================= -->
		
		
		<nav class="navbar navbar-expand-md navbar-dark bg-success ">
			
			<div class="container ">
				<button class="navbar-toggler mx-auto" data-target="#nav" data-toggle="collapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="" class="navbar-brand">FARMCART</a>
				<div class="collapse navbar-collapse" id=nav>
					<ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>
                        <?php echo "<li class='nav-item'><a class='nav-link'>$seller</a></li>";?>
					</ul>
				</div>
			</div>
		</nav>
		
	<!-- =============================================|HEADER ENDS |============================================ -->
<!--====================================inventory list======================================-->
<div class="container" id="seller-inventory">
    <table>
        <tr>
            <th>PID</th>
            <th>ITEM NAME</th>
            <th>CATEGORY</th>
            <th>PRICE</th>
            <th>STOCK</th>
        </tr>
        <?php
           
            $select="select * from inventory where seller='$seller'" ;
            $query=mysqli_query($connect,$select);
            while($row=mysqli_fetch_assoc($query)){
                $cat=$row['category'];
                $name = $row['name'];
                $price=$row['msp'];
                $stock=$row['stock'];
                $pid=$row['pid'];
                echo "
                <tr>
                    <td>
                        $pid
                    </td>
                    <td>
                        $name
                    </td>
                    <td>
                        $cat
                    </td>
                    <td>
                        $price
                    </td>
                    <td>
                        $stock
                    </td>
                </tr>
                ";
            }
        ?>
    </table>
</div>
<!--===================================adding item=========================================-->
<div class="container">
    <h4 class="category">Add New item</h4>
    <form method="POST" action="add-item.php" enctype="multipart/form-data">
    <table id="add-item">
        <tr>
            <th>ITEM NAME</th>
            <th>CATEGORY</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>IMAGE</th>
        </tr>
        <tr>
            <td><input type="text" name="item-name"></td>
            <td>
                <select name="category">
                    <option value="seed">Seed</option>
                    <option value="crop">Crop</option>
                    <option value="fert">Fertilizer</option>
                </select>
            </td>
            <td><input type="number" name="price"></td>
            <td><input type="number" name="stock"></td>
            <td><input type="file" name="image"></td>
        </tr>
    </table>
      
    <br>
    <div align="center">
        <input type="submit" name="submit-add-item" value="Add" class="btn btn-lg btn-info">
    </div>  
</form>
</div>
</body>
</html>