<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide z-depth-1-half" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/n1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/n2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/n4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Story</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/cc1.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2>Naruto</h2>
				<p class="py-3"></p>
				<a href="about.php" class="btn btn-success"> check more</a>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Content</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
				  <img class="card-img-top" src="images/cc3.png" alt="Card image">
					  <div class="card-body">
						    <h4 class="card-title">Akatsuki</h4>
						    <p class="card-text">Some example text.</p>
						    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
                  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
				  <img class="card-img-top" src="images/cc3.png" alt="Card image">
					  <div class="card-body">
						    <h4 class="card-title">Akatsuki</h4>
						    <p class="card-text">Some example text.</p>
						    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
                  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
				  <img class="card-img-top" src="images/cc3.png" alt="Card image">
					  <div class="card-body">
						    <h4 class="card-title">Akatsuki</h4>
						    <p class="card-text">Some example text.</p>
						    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
                  </div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Characters</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 container">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
					
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc4.jpeg" class="img-fluid pb-4">
			</div>

		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control"> 
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control"> 
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control"> 
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="Comment"></textarea> 
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@naruto</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
