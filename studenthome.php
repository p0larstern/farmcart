<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" >
	<title>HOME</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link href="src/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<!-- <link rel="stylesheet" href="style.css"> -->
	<?php include "typeeffect.php" ?>
</head>
<body>
	<div class="carousel slide" data-ride="carousel" id=carousel>
		
		<div class="carousel-inner">	
			<div class="carousel-item active">	
				<img src="src/images/1.jpg" class="slide-img">
				<div class="carousel-caption">	
					<h2 style=" width: <?php echo 1.4*strlen("HELLO ". $_SESSION['name']);?>ch">
						<?php
							echo "HELLO ". $_SESSION['name'];
						?>
					</h2>
				</div>
			</div>

			<div class="carousel-item">	
				<img src="src/images/2.jpg" class="slide-img">
				<div class="carousel-caption">	
					<h2 style=" width: <?php echo 1.4*strlen("HELLO ". $_SESSION['name']);?>ch">
						<?php
							echo "HELLO ". $_SESSION['name'];
						?>
					</h2>
				</div>
			</div>
				
			<div class="carousel-item">	
				<img src="src/images/3.jpg" class="slide-img">
				<div class="carousel-caption">	
					<h2 style=" width: <?php echo 1.4*strlen("HELLO ". $_SESSION['name']);?>ch">
						<?php
							echo "HELLO ". $_SESSION['name'];
						?>
					</h2>
				</div>
			</div>
		</div>	

		<!-- <ul class="carousel-indicators">	
			<li class="active" data-slide-to="0" data-target="#carousel"></li>
			<li class="" data-slide-to="1" data-target="#carousel"></li>
			<li class="" data-slide-to="2" data-target="#carousel"></li>
		</ul> -->

		<a href="#carousel" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
				
	</div>


<!-- =======================| CAROUSEL ENDS  |========================== -->
<!-- ==============================================| HEADER |================================================= -->
		
		
<!-- ============================================| HEADER ENDS |============================================ -->
<div class="container">
<div class="row">
	<?php
	$connect=mysqli_connect("localhost","root","","dsc");

		$time=getdate();
		$year=$time['year'];
		$month=$time['month'];
		$select="select * from books where book_month = '$month' and book_year = '$year' and book_status='Available' ";
		$query=mysqli_query($connect,$select);
		if(mysqli_num_rows($query)>0){
			while($row=mysqli_fetch_assoc($query)){
				$id=$row['book_id'];
				echo '
					<div class="card col-8 offset-2 col-md-4 offset-md-0 col-lg-3">
						<img src="src/images/001.jpg" class="card-img" alt="">
						<h4 class="card-title">'.$row["book_name"].'</h4>
						<p class="card-text">DESCRIPTION</p>
						<a href="issue.php?id='.$id.'" class="btn btn-info issue-btn"  name="issue" >ISSUE</a>
					</div>
				';
			}
		}
	?>
</div>
</div>

</body>
</html>
