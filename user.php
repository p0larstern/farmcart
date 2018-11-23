<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BUY</title>
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
						<li class="nav-item"><a class="nav-link" href="seller.php">SELL</a></li>
						<li class="nav-item"><a class="nav-link">LOGOUT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
	<!-- =============================================|HEADER ENDS |============================================ -->
	<h1 class="category">CROPS</h1>
	<div class="row">
		
		
						<?php

						$connect=mysqli_connect("localhost","root","","dsc");
						$sel="select * from inventory where category='crop'";
						$query=mysqli_query($connect,$sel);
						$name = "";
						$cat="";
						$price=0;
						$stock=0;
						$seller="";
						if(mysqli_num_rows($query)>0){
							while($row=mysqli_fetch_assoc($query)){
								$name = $row['name'];
								$cat=$row['category'];
								$price=$row['msp'];
								$stock=$row['stock'];
								$seller=$row['seller'];
								$pid=$row['pid'];

								echo '
								<div class="col-12 col-md-4 col-lg-3">

									<div class="card">
								
										<img src="pid_img/'.$pid.'.jpg" class="card-img"> 
									  
										<div class="card-title">
											<h2>'.$name.'</h2>
									  	</div>
										<div class="card-body">
											<h4>PRICE :'. $price.'</h4>
											<h4>SELLER :'. $seller.'</h4>
									</div>
									</div>
		</div>';


							}
						}

						?>

			
	</div>
	<h1 class="category">SEEDS</h1>
	<div class="row">
		
		
						<?php

						$connect=mysqli_connect("localhost","root","","dsc");
						$sel="select * from inventory where category='seed'";
						$query=mysqli_query($connect,$sel);
						$name = "";
						$cat="";
						$price=0;
						$stock=0;
						$seller="";
						if(mysqli_num_rows($query)>0){
							while($row=mysqli_fetch_assoc($query)){
								$name = $row['name'];
								$cat=$row['category'];
								$price=$row['msp'];
								$stock=$row['stock'];
								$seller=$row['seller'];
								$pid=$row['pid'];
								echo '
								<div class="col-12 col-md-4 col-lg-3">
									<div class="card">
									 
										<img src="pid_img/'.$pid.'.jpg" class="card-img"> 
									  
										<div class="card-title">
											<h2>'.$name.'</h2>
									  	</div>
										<div class="card-body">
											<h4>PRICE :'. $price.'</h4>
											<h4>SELLER :'. $seller.'</h4>
									</div>
									</div>
		</div>';


							}
						}

						?>

			
	</div>
	<h1 class="category">FERTILIZERS</h1>
	<div class="row">
		
		
						<?php

						$connect=mysqli_connect("localhost","root","","dsc");
						$sel="select * from inventory where category='fert'";
						$query=mysqli_query($connect,$sel);
						$name = "";
						$cat="";
						$price=0;
						$stock=0;
						$seller="";
						if(mysqli_num_rows($query)>0){
							while($row=mysqli_fetch_assoc($query)){
								$name = $row['name'];
								$cat=$row['category'];
								$price=$row['msp'];
								$stock=$row['stock'];
								$seller=$row['seller'];
								$pid=$row['pid'];
								echo '
								<div class="col-12 col-md-4 col-lg-3">
									<div class="card">

										<img src="pid_img/'.$pid.'.jpg" class="card-img" > 
								
										<div class="card-title">
											<h2>'.$name.'</h2>
									  	</div>
										<div class="card-body">
											<h4>PRICE :'. $price.'</h4>
											<h4>SELLER :'. $seller.'</h4>
									</div>
									</div>
		</div>';


							}
						}

						?>

			
	</div>

</body>
</html>