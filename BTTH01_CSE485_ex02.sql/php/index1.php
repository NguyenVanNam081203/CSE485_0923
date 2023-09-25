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
            <div class="bottom_content d-flex">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/ChuyenTinhCayVaLa.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: rgba(2,139,255,1)">Cây, lá, và gió</h5>
                            </div>
                        </div>
                        <div class="card ms-3" style="width: 18rem;">
                            <img src="../img/Oicuocsongmenthuong.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: rgba(2,139,255,1)">Cuộc sống mến thương</h5>
                            </div>
                        </div>
                        <div class="card ms-3" style="width: 18rem;">
                            <img src="../img/Longme.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: rgba(2,139,255,1)">Lòng mẹ</h5>
                            </div>
                        </div>
                        <div class="card ms-3" style="width: 18rem;">
                            <img src="../img/Phoipha.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: rgba(2,139,255,1)">Phôi pha</h5>
                            </div>
                        </div>
                        <div class="card ms-3" style="width: 18rem;">
                            <img src="../img/Nơitinhyeubatdau.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: rgba(2,139,255,1)">Nơi tình yêu bắt đầu</h5>
                            </div>
                        </div>
            </div>
                 
        <div class="col-12">
            <hr>
            <span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:50vh">tlu's music garden</span>
        </div>
    </div>
<link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>