<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
            include '../form/Form_head_trangchu.php';
        ?>
        <div class="row justify-content-center">

        <div class="col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                
                <h3 class = "text-center">Thêm mới Tài khoản</h3>
                <div class="input-group mb-3  ">
                    <span class="input-group-text" id="basic-addon1">Username</span>
                    <input type="text" class="form-control " name = 'user'>
                </div>

                <div class="input-group mb-3  ">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="email" class="form-control " name = 'email'>
                </div>

                <div class="input-group mb-3  ">
                    <span class="input-group-text" id="basic-addon1">Mật khẩu</span>
                    <input type="password" class="form-control " name = 'pass1'>
                </div>

                <div class="input-group mb-3  ">
                    <span class="input-group-text" id="basic-addon1">Nhập lại mật khẩu</span>
                    <input type="password" class="form-control " name = 'pass2'>
                </div>
                <a href="#"><button type="submit" name="sbmSave" class="btn btn-warning mt-2 ">Thêm</button></a>
            </form>
        </div>
        <?php
        // Kiểm tra nếu người dùng đã nhấn nút submit
// Kiểm tra nếu người dùng đã nhấn nút submit
if (isset($_POST['sbmSave'])) {
    // Nhận dữ liệu từ người dùng
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    // // Kiểm tra mật khẩu có khớp không
    // if ($pass1 != $pass2) {
    //     $error = "Mật khẩu không khớp";
    //     header("Location: user_add.php?error=$error");
    // }

    // Kết nối đến cơ sở dữ liệu
    try {
        $conn = new PDO("mysql:host=localhost;dbname=btt01b", "root", "1234");

        // Kiểm tra tài khoản đã tồn tại chưa
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: user_add.php?error=existed");
        } else {

            // Thêm tài khoản mới
            $sql_insert = "INSERT INTO users (username, email, pass) VALUES ('$user', '$email', '$pass')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo 'Thanh cong';
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>


</div>

    </div>
    
</body>
</html>