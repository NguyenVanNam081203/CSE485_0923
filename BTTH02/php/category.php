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
    <div class="container">
        <?php
            include '../form/Form_head_admin.php';
        ?>
        <div class="add_theloai">
            <a class="btn btn-warning mt-5" href="add_category.php">Thêm mới</a>
        </div>
        <?php
                     if(isset($_GET['success'])){
                         $id = $_GET['success'];
                         echo "<h2 style='color:red'>{$_GET['success']}</h2>";
                     }
                ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Kết nối đến cơ sở dữ liệu

                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                $sql = "select * from theloai";

                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

             
                // Truy vấn dữ liệu từ bảng users
                
                // Lặp qua dữ liệu và hiển thị trong bảng
                while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
                    ?>
                        <tr>
                        <td>  <?=$row['ma_tloai'] ?> </td>
                        <td>  <?=$row['ten_tloai'] ?></td>
                        <td><a href="edit_category.php?Id=<?=$row['ma_tloai']?>"><i class='bi bi-pen'></i></a></td>
                        <td>
                            <a data-bs-toggle='modal' data-bs-target="#<?=$row['ma_tloai']?>"><i class='bi bi-trash3' > </a></i>
                            <div class="modal fade" id="<?=$row['ma_tloai']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn chắc chắn muôn xóa id: <?= $row['ma_tloai']; ?>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="delete_category1.php?Id=<?=$row['ma_tloai']?>">Delete</a>
                            </div>
                            </div>
                        </div>
                   
                        </td>
                        </tr>
                    
                        
                        
                        
                    <?php
                
                }
                ?>

            </tbody>
        </table>

        <div class="col-12">
				<hr>
				<span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:60vh">tlu's music garden</span>
        </div>


    </div>

    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>