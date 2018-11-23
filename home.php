<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- <link rel="stylesheet" href="style.css"> -->
	
<link href="src/css/stylehome.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- FARMER==USER
CORP == seller
	
	 -->

	<div class="carousel slide" data-ride="carousel" id=carousel>
		
		<div class="carousel-inner">	
			<div class="carousel-item active">	
				<div class="bg">
					<img src="src/images/testlogo.jpg" alt="logo" id="logo">
				</div>
				<!-- <img src="src/images/1.jpg" class="slide-img"> -->
			</div>

			
		</div>	

				
	</div>


		<!-- =======================| CAROUSEL ENDS  |========================== -->

		

<!-- ==============================================| HEADER |================================================= -->
		
		
		<nav class="navbar navbar-expand-md navbar-dark bg-success ">
			
			<div class="container">
				<button class="navbar-toggler mx-auto" data-target="#nav" data-toggle="collapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="" class="navbar-brand" id="header-text">FARMCART</a>
				<div class="collapse navbar-collapse" id=nav>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#login">Login</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#signup">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
	<!-- =============================================|HEADER ENDS |============================================ -->
	<!-- =================================================| SIGNUP  MODAL |================================== -->

	

	<div class="modal" id="signup">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>SIGN UP</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<ul class="nav nav-tabs">
					<li class="nav-item"><a href="#signup-frm-tab" data-toggle="tab" class="nav-link active">FARMER</a></li>
					<li class="nav-item"><a href="#signup-crp-tab" data-toggle="tab" class="nav-link">CORPORATION</a></li>
				</ul>
				<div class="modal-body">

					<div class="tab-content">
						<div id="signup-frm-tab" class="container tab-pane active ">
							
							<form action="signup.php" method="post">
								<div class="form-group">
									<label for="frm-name">NAME:</label>
									<input type="text" id="frm-name" name="frm-name" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="frm-mail">E-MAIL:</label>
									<input type="email" id="frm-mail" name="frm-mail" class="form-control" required>
								</div>

								<div class="form-group">
									<label for="frm-pwd">PASSWORD:</label>
									<input type="password" id="frm-pwd" name="frm-pwd" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="frm-pno">PHONE NO.</label>
									<input type="text" id="frm-pno" name="frm-pno" class="form-control" required>
								</div>								
								
								<div class="form-group">
									<label for="frm-add">ADDRESS:</label>
									<input type="text" id="frm-add" name="frm-add" class="form-control" required>
								</div>
								<div class="form-group">
									<button type="submit" name="frm-signin" class="btn btn-info float-right">CREATE ACCOUNT</button>
									<button type="reset" class="btn btn-danger float-left">RESET</button>
								</div>
							</form>
						</div>
						<div id="signup-crp-tab" class="container tab-pane fade">
							<form action="signup.php" method="post">
								<div class="form-group">
									<label for="crp-name">CORP. NAME:</label>
									<input type="text" id="crp-name" name="crp-name" class="form-control" required>
								</div>
								
								
								<div class="form-group">
									<label for="crp-mail">E-MAIL:</label>
									<input type="email" id="crp-mail" name="crp-mail" class="form-control" required>
								</div>
								
								
								<div class="form-group">
									<label for="crp-pwd">PASSWORD:</label>
									<input type="password" id="crp-pwd" name="crp-pwd" class="form-control" required>
								</div>

								<div class="form-group">
									<label for="crp-pno">PHONE NO. :</label>
									<input type="text" id="crp-pno" name="crp-pno" class="form-control" required>
								</div>

								<div class="form-group">
										<label for="crp-add">Address:</label>
										<input type="text" id="crp-add" name="crp-add" class="form-control" required>
									</div>
								<div class="form-group">
									<button type="submit" name="crp-signin" class="btn btn-info float-right">CREATE ACCOUNT</button>
									<button type="reset" class="btn btn-danger float-left">RESET</button>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</div>
		</div>
	</div>

<!-- =================================================| Login  MODAL |================================== -->

	<div class="modal" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>LOGIN</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<ul class="nav nav-tabs">
					<li class="nav-item"><a href="#frm-login" data-toggle="tab" class="nav-link active">Farmers</a></li>
					<li class="nav-item"><a href="#crp-login" data-toggle="tab" class="nav-link">CORP</a></li>
				</ul>
				<div class="modal-body">
					<div class="tab-content">
						<div class="tab-pane active" id="frm-login">
							<form action="login.php" method="post">
									
								<div class="form-group">
									<label for="frm-pno">EMAIL :</label>
									<input type="email" id="frm-pno" name="frm-pno" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="frm-lpwd">PASSWORD:</label>
									<input type="password" id="frm-lpwd" name="frm-lpwd" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info" name="frm-login">LOGIN</button>
								</div>
								

							</form>
						</div>

						<div class="tab-pane fade" id="crp-login">
							<form action="login.php" method="post">
									
								<div class="form-group">
									<label for="crp-lmail">CORP. MAIL :</label>
									<input type="email" id="crp-lmail" name="crp-lmail" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="crp-lpwd">PASSWORD:</label>
									<input type="password" id="crp-lpwd" name="crp-lpwd" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info" name="crp-login">LOGIN</button>
								</div>
								

							</form>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
<!-- =================================| LOGINS ENDS |========================== -->
	<div class="section">	
		<div class="row">	
			<div class="col-md-6 offset-md-0 col-8  offset-2 section-img">	
				<img src="src/images/wheat.jpg" class="thumb">
			</div>
			<div class="col-md-6 col-12 section-text mx-auto">	
				<h2>FRESH HARVESTS</h2>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatibus ipsa dignissimos impedit, cupiditate cum reprehenderit nesciunt assumenda odit illum veniam voluptate unde, velit fugiat fuga suscipit nobis, repellendus consequatur nemo. Blanditiis in, quos placeat, fugit veniam asperiores nesciunt praesentium magnam molestias ducimus vel beatae nihil ipsum consectetur at porro.</p>
			</div>
		</div>
	</div>


	<div class="section">	
		<div class="row">	
			
			<div class="col-md-6 col-12 section-text mx-auto">	
				<h2>ORGANIC FERTILIZERS </h2>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatibus ipsa dignissimos impedit, cupiditate cum reprehenderit nesciunt assumenda odit illum veniam voluptate unde, velit fugiat fuga suscipit nobis, repellendus consequatur nemo. Blanditiis in, quos placeat, fugit veniam asperiores nesciunt praesentium magnam molestias ducimus vel beatae nihil ipsum consectetur at porro.</p>
			</div>
			<div class="col-md-6 offset-md-0 col-8  offset-2 section-img">	
				<img src="src/images/fertilizers.png" class="thumb">
			</div>
		</div>
	</div>




	<div class="section">	
		<div class="row">	
			<div class="col-md-6 offset-md-0 col-8  offset-2 section-img">	
				<img src="src/images/seeds.jpg" class="thumb">
			</div>
			<div class="col-md-6 col-12 section-text mx-auto">	
				<h2>HIGH QUALITY SEEDS</h2>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatibus ipsa dignissimos impedit, cupiditate cum reprehenderit nesciunt assumenda odit illum veniam voluptate unde, velit fugiat fuga suscipit nobis, repellendus consequatur nemo. Blanditiis in, quos placeat, fugit veniam asperiores nesciunt praesentium magnam molestias ducimus vel beatae nihil ipsum consectetur at porro.</p>
			</div>
		</div>
	</div>





	<!-- <div class="section">	
		<div class="row">	
			
			<div class="col-md-6 col-12 section-text mx-auto">	
				<h2>SAMPLE HEADING</h2>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatibus ipsa dignissimos impedit, cupiditate cum reprehenderit nesciunt assumenda odit illum veniam voluptate unde, velit fugiat fuga suscipit nobis, repellendus consequatur nemo. Blanditiis in, quos placeat, fugit veniam asperiores nesciunt praesentium magnam molestias ducimus vel beatae nihil ipsum consectetur at porro.</p>
			</div>
			<div class="col-md-6 offset-md-0 col-8  offset-2 section-img">	
				<img src="src/images/pic.jpg" class="thumb">
			</div>
		</div>
	</div>





	<div class="section">	
		<div class="row">	
			<div class="col-md-6 offset-md-0 col-8  offset-2 section-img">	
				<img src="src/images/pic.jpg" class="thumb">
			</div>
			<div class="col-md-6 col-12 section-text mx-auto">	
				<h2>SAMPLE HEADING</h2>
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatibus ipsa dignissimos impedit, cupiditate cum reprehenderit nesciunt assumenda odit illum veniam voluptate unde, velit fugiat fuga suscipit nobis, repellendus consequatur nemo. Blanditiis in, quos placeat, fugit veniam asperiores nesciunt praesentium magnam molestias ducimus vel beatae nihil ipsum consectetur at porro.</p>
			</div>
		</div>
	</div> -->

	<div class="footer">
	</div>


<script src="src/js	/script.js"></script>

</body>
</html>