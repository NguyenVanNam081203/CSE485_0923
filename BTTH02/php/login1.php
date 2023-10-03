<?php
ob_start();
?>
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
		<?php
                // Kết nối đến cơ sở dữ liệu
                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                $sql = "select * from users ;";                
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                
                if(isset($GET_['error'])){
                    echo "Tài khoản hoặc mật khẩu không chính xác";
                }
            ?>
    <div class="container">
        <?php
        include "../form/Form_head_trangchu.php"
        ?>
		<?php
                    if(isset($_GET['error'])){
                        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    }
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
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
						<div class="input-group form-group">
							<div class="input-group-prepend ">
								<span class="input-group-text"style="border-radius:0;" ><i class="fas fa-user " style="padding-left: 5px;"></i></span>
							</div>
							<input type="text" class="form-control" name="name" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend mt-2">
								<span class="input-group-text" style="border-radius:0;"><i class="fas fa-key " style="padding-left: 5px;"></i></span>
							</div>
							<input type="password" class="form-control mt-2" name="password" placeholder="password">
						</div>
						<div class="row align-items-center remember mt-2">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success login_btn mt-2" style="float:right; background: #FFC312; color:black;">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links ">
						Don't have an account?<a href="#" class=" text-decoration-none" ><a class=" nav-link" style="color: #FFC312" href="../php/Register.php">Sign Up</a></a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#" class=" text-decoration-none"  style="color: #FFC312;">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
		<?php
                if(isset($_POST['name'])&isset($_POST['password'])){
                    $name = $_POST['name'];
                   
                    $passwordd = $_POST['password'];
                    $sql = "select * from users where username = '$name' and pass = '$passwordd' ;";                
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                
                    if($list_sql->rowCount()>0){
                        header("location: admin1.php");
						ob_end_flush();
                    }
                    else{
                        echo "<p class='text-center'>Tài khoản hoặc mật khẩu không chính xác</p>";
                    }
                }



                
            ?>   
		<div class="col-12">
				<hr>
				<span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:60vh">tlu's music garden</span>
        	</div>
	</div>
    
    </div>
<link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>