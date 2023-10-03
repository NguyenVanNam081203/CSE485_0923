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
                    
                    <h3 class = "text-center">Khôi phục mật khẩu</h3>
                    <div class="input-group mb-3  ">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" class="form-control " name = 'email'>
                    </div>
                    
                    <a href="#"><button type="submit" name="sbmForgot" class="btn btn-warning mt-2 ">Check Email</button></a>
                </form>
            </div>
        </div>
        <?php

// Kiểm tra nếu người dùng đã nhấn nút gửi yêu cầu quên mật khẩu
if (isset($_POST['sbmForgot'])) {
    // Nhận dữ liệu từ người dùng
    $email = $_POST['email'];

    // Kết nối đến cơ sở dữ liệu
    // try {
        $conn = new PDO("mysql:host=localhost;dbname=btt01b", "root", "1234");

        // Tìm kiếm tài khoản của người dùng dựa trên email
        $sql_check = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
     

        // Nếu tài khoản được tìm thấy, sẽ gửi email cho người dùng với liên kết khôi phục mật khẩu
        if ($stmt->rowCount() > 0) {
            // Tạo mã khôi phục mật khẩu
            // $token = md5(uniqid());
            echo "co email";
        }
            else{
            echo "khong co";
        }

    //         // Cập nhật mã khôi phục mật khẩu vào cơ sở dữ liệu
    //         $sql_update = "UPDATE users SET token = '$token' WHERE email = '$email'";
    //         $stmt = $conn->prepare($sql_update);
    //         $stmt->execute();

    //         // Gửi email cho người dùng với liên kết khôi phục mật khẩu
    //         $subject = "Khôi phục mật khẩu";
    //         $body = "
    //         <html>
    //         <head>
    //         <title>Khôi phục mật khẩu</title>
    //         </head>
    //         <body>
    //         <p>Bạn đã yêu cầu khôi phục mật khẩu.</p>
    //         <p>Để đặt lại mật khẩu của bạn, hãy nhấp vào liên kết sau:</p>
    //         <a href='https://example.com/reset_password.php?token=$token'>Đặt lại mật khẩu</a>
    //         </body>
    //         </html>
    //         ";
    //         mail($email, $subject, $body);

    //         // Hiển thị thông báo thành công cho người dùng
    //         $success = "Chúng tôi đã gửi email cho bạn với liên kết khôi phục mật khẩu. Vui lòng kiểm tra email của bạn.";
    //         header("Location: forgot_password.php?success=$success");
    //     } else {
    //         // Hiển thị thông báo lỗi cho người dùng
    //         $error = "Không tìm thấy tài khoản với email này.";
    //         header("Location: forgot_password.php?error=$error");
    //     }
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    }
// }

?>





    </div>
    
</body>
</html>