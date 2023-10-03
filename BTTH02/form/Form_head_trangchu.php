<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .search-text{
        border-radius: 5px 5px;
        width: 25vh;
        height: 35px;
        outline: none;
    }
    .btn-s{
        border-color: green;
    }
    .header_con h5:hover {
        color: black !important;
    }
</style>
<body>
    <div class="head_content">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-7 header_con d-flex mt-2">
                        <div class="logo-head " style=" width: 30vh;">
                            <img class=" w-100" src="../img/HeadTrangChu.png" alt="">
                        </div>
                        <h5 style=" color: gray;
        padding-left: 50px;" class=" mt-5 ps-2"><a class="nav-link" href="../php/index1.php">Trang chủ</a></h5>
                        <h5 style=" color: gray;
        padding-left: 50px;" class=" mt-5 ps-2"><a class="nav-link" href="../php/login1.php">Đăng nhập</a></h5>
                    </div>
                    <div class="col-md-3 d-flex">
                            <form action="" class="search-box d-flex">
                                    <input type="text" class="search-text me-2 border-1" style="border-color: azure;" placeholder="Nội dung cần tìm">
                                    <button class="btn-s btn-success text-success bg-light">Tìm</button>
                            </form>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js">
</body>
</html>