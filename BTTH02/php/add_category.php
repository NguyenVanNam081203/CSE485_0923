<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <?php
            include '../form/Form_head_admin.php';
        ?>
            <div class="row ">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                <h3 class = "text-center">Thêm mới thể loại</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">tên thể loại</span>
                    <input type="text" class="form-control" name = 'Theloai'>
                </div>
                <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Thêm</button></a>
                <a class="btn btn-warning mt-2" href="category.php ">Quay lại</a>
                
                
            </form>
            </div>
        </div>

        <?php
            if(isset($_GET['Theloai'])){
                $theloaii = $_GET['Theloai'];
                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                $sql = "INSERT INTO theloai ( ten_tloai) VALUES ( '$theloaii');";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                echo 'Thanh cong';
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