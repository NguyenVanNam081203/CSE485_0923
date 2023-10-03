<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết</title>
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                include "../form/Form_head_trangchu.php";
            ?>
             <?php
                // Kết nối đến cơ sở dữ liệu
                $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");

        
                if (isset($_GET['mabv'])) {
                    $mabv = $_GET['mabv'];
                    $sql = "select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = $mabv;";
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();

                    $row = $list_sql->fetch(PDO::FETCH_ASSOC);

                    if ($row !== null) {
                        $ten_bhat = $row['ten_bhat'];
                        $ten_tloai = $row['ten_tloai'];
                        $tomtat = $row['tomtat'];
                        $noidung = $row['noidung'];
                        $ten_tgia = $row['ten_tgia'];
                        $hinh_tgia = $row['hinh_tgia'];
                    }
                }

            ?>

                <div class="row">
                    <div class="img col-md-4">
                        <img class=" w-100 mt-2" src="../img/<?=$hinh_tgia?>" alt="">
                    </div>
                    <div class="noidung col-md-6">
                        <h3 class=" text-primary"> <?=$ten_bhat?></h3>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="d-inline">Bài hát:</h6>
                                <p class="d-inline"><?=$ten_bhat?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="d-inline">Thể loại:</h6>
                                <p class="d-inline"><?=$ten_tloai?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="d-inline">Tóm tắt:</h6>
                                <p class="d-inline"><?=$tomtat?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="d-inline">Nội dung:</h6>
                                <p class="d-inline"><?=$noidung?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="d-inline">Tác giả:</h6>
                                <p class="d-inline"><?=$ten_tgia?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

            <!-- <div class="main_detail mt-4">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="logo_deatail ms-4 text-end">
                            <img class=" w-75" src="../img/ChuyenTinhCayVaLa.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4 style="color: rgba(2,139,255,1);">Cây và gió</h4>
                        <h5 class=" fw-bold">Bài hát: <span style="font-weight: normal;">Cây và gió</span></h5 >
                        <h5 class=" fw-bold">Thể loại: <spanv style="font-weight: normal;" >Nhạc trữ tình</spanv></h5>
                        <h5 class=" fw-bold">Tóm tắt: <span style="font-weight: normal;">Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát "Cây và gió" đã làm tâm 
                                            hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận 
                                            sâu trong tim mình.Bởi vì em nhút nhát , em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em 
                                            không dám đối diện với chính mình.</span></h5>
                        <h5 class=" fw-bold">Nội dung: <span style="font-weight: normal;">Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát "Cây và gió" đã làm tâm 
                                            hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận 
                                            sâu trong tim mình.Bởi vì em nhút nhát , em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em 
                                            không dám đối diện với chính mình.</span></h5>
                        <h5 class=" fw-bold">Tác giả: <span style="font-weight: normal;">Nguyễn Văn Giả</span></h5>
                    </div>
                </div>
                <div class="col-12">
                    </div>    
            </div> -->
            <div class="bottom_detail">
                <hr>
                <span class="position-fixed text-uppercase" style="font-weight: bold; margin-left:60vh">tlu's music garden</span>
            </div>     
        </div>
    </div>
<link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>