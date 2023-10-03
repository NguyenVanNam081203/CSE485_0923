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
        <?php
            if(isset($_GET['Id'])){
                $Id = $_GET['Id'];
                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                $sql = "select * from theloai where ma_tloai = '$Id';";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();
                
                $row = $list_sql->fetch(PDO::FETCH_ASSOC);


            }




        ?>
            <div class="row ">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='GET'>
                <h3 class = "text-center">Sửa thông tin thể loại</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ID</span>
                    <input type="text" class="form-control" name = 'ID' value='<?=$row['ma_tloai']?>' readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">tên thể loại</span>
                    <input type="text" class="form-control" name = 'Theloai' value = '<?=$row['ten_tloai']?>'>
                </div>
                <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Lưu</button></a>
                <a class="btn btn-warning mt-2" href="./category.php">Quay lại</a>
                
                
            </form>
            </div>
        </div>

        <?php
            if(isset($_GET['Theloai'])&isset($_GET['ID'])){
                $theloaii = $_GET['Theloai'];
                $ID = $_GET['ID'];
                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                $sql = "UPDATE theloai SET  ten_tloai = '$theloaii' WHERE ma_tloai = '$ID';";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                if ($list_sql->rowCount() > 0) {
                    // Hiển thị thông báo thành công
                    echo "Cập nhật thành công!";
                } else {
                    // Hiển thị thông báo lỗi
                    echo "Lỗi: " . $list->errorInfo()[2];
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