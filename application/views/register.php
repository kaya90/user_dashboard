<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
		  <div class="container">
		  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Test App</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Sign in</a></li>

		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		  </div>
		  
		</nav>
	</header>
	<div class="container">
		<form class="form-inline">
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputEmail3">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
    	  </div>
    	  <div class="form-group">
		    <label class="sr-only">First Name</label>
		    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label class="sr-only">Last Name</label>
		    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputPassword3">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label class="sr-only">Password Confirmation</label>
		    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
		  </div> 
		  <button type="submit" class="btn btn-default">Register</button>
		</form>
		<a href="">Already have an account? Login</a>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>