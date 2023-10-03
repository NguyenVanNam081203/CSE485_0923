<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <?php
            include '../form/Form_head_admin.php'
        ?>


        <?php
            // Kết nối đến cơ sở dữ liệu

            $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                                                    

            $sql1 = "select * from users";
            $sql2 = "select * from theloai";
            $sql3 = "select * from tagia";
            $sql4 = "select * from baiviet";

            $list_sql1 = $conn->prepare($sql1);
            $list_sql1->execute();
            $countusers = $list_sql1->rowCount();

            $list_sql2 = $conn->prepare($sql2);
            $list_sql2->execute();
            $counttheloai = $list_sql2->rowCount();


            $list_sql3 = $conn->prepare($sql3);
            $list_sql3->execute();
            $counttagia = $list_sql3->rowCount();


            $list_sql4 = $conn->prepare($sql4);
            $list_sql4->execute();
            $countbaiviet = $list_sql4->rowCount();


        
        ?>

        <div class="d-flex justify-content-around">
            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Người dùng</p>
                <p class="mb-0"><?=$countusers?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Thể loại</p>
                <p class="mb-0"><?=$counttheloai?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Tác giả</p>
                <p class="mb-0"><?=$counttagia?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Bài viết</p>
                <p class="mb-0"><?=$countbaiviet?></p>
            </div>

        </div>


        <div class="col-12">
				<hr>
				<span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:60vh">tlu's music garden</span>
        	</div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>