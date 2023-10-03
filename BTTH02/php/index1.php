<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chu</title>
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>
<style>
    h4{
        color: rgba(2,139,255,1);
    }
</style>

<body>
    <div class="container vh-100 g-0">
        
            <?php
                include "../form/Form_head_trangchu.php";
            ?>

            <div class="main_content">
                    <div class="col-12 mt-3 main">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="../img/MainTrangCHu.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="..." class="d-block " alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="..." class="d-block " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class=" text-uppercase mt-1 text-center">top bài hát yêu thích</h4>
                    </div>
            </div>

            <?php
            // Kết nối đến cơ sở dữ liệu

            $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
                                                    

            $sql = "select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        ?>

            <div class="bottom_content d-flex">
                <div class="row">
                    <?php
                            while($row = $list_sql->fetch())
                        {
                            ?>
                                <div class="card col-md-3 mx-4 g-0 my-2" style="width: 18rem;">
                                    <img src="../img/<?= $row[2] ?>" alt="">
                                    <div class="card-body text-center">
                                        <a class=" text-decoration-none" href="detail1.php?mabv=<?=$row[3]?>"><p class="text-center"><?= $row[5]?></p></a>
                                    </div>
                            </div>

                            <?php
                        }
                        ?>
                </div>   
            </div>
            
        
        <div class="col-12">
            <hr>
            <span class=" text-uppercase" style="font-weight: bold; margin-left:60vh">tlu's music garden</span>
        </div>
    </div>
<link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>