<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết</title>
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        include "../form/Form_head_trangchu.php"
        ?>
		<div class="col-md-12 d-flex justify-content-center h-50">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form>
						<div class="input-group form-group">
							<div class="input-group-prepend ">
								<span class="input-group-text"style="border-radius:0;" ><i class="fas fa-user " style="padding-left: 5px;"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend mt-2">
								<span class="input-group-text" style="border-radius:0;"><i class="fas fa-key " style="padding-left: 5px;"></i></span>
							</div>
							<input type="password" class="form-control mt-2" placeholder="password">
						</div>
						<div class="row align-items-center remember mt-2">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<div class="btn btn-success login_btn mt-2" style="float:right; background: #FFC312; color:black;">Login</div>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links ">
						Don't have an account?<a href="#" class=" text-decoration-none" style="color: #FFC312">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#" class=" text-decoration-none"   style="color: #FFC312;">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
        
		<div class="col-12">
				<hr>
				<span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:50vh">tlu's music garden</span>
        	</div>
	</div>
    
    </div>
<link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>