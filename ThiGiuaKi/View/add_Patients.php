<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script href='../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="/icons-1.11.1/font/bootstrap-icons.min.css">

</head>
<body>
    
    
    <div class="container">
        <div class="row justify-content-between m-4 ">
                
                <!-- Thanh menu -->
            <div class="haha d-inline col-md-5">
                <ul class="nav">
                    <li>
                        <img src="" alt="">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?c=Doctor">Doctor</a>
                    </li>
                </ul>
            </div>
                <!-- -- -->
                <!-- Tim kiem -->
            <div class="searchh d-inline col-md-3 mr-5">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nội dung cần tìm.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm</button>
            </div>
            
        </div>   
    </div>
        <div class="row">
           
            <div class="col-md-10">
                <div class="container">
                    <div class="row ">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <h3 class = "text-center">Thêm mới Bệnh nhân</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                                <input type="text" class="form-control" name = 'name'>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Date</span>
                                <input type="date" class="form-control" name = 'date'>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Symtom</span>
                                <input type="text" class="form-control" name = 'Symtom'>
                            </div>
                         
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ID Doctor</span>
                                <input type="text" class="form-control" name = 'iddoctor'>
                            </div>
                            <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Thêm</button></a>
                            <a class="btn btn-warning mt-2" href="/index.php">Quay lại</a>
                            
                            
                        </form>
                    </div>
                </div>
            </div>

        </div>    
        <!-- private $id;
    private $name;
    private $date;
    private $symptom;
    private $idDoctor; -->
        <?php
                if(isset($_POST['name'])&isset($_POST['date'])&isset($_POST['symptom'])&isset($_POST['idDoctor'])){
                    $name = $_POST['name'];
                    $email = $_POST['date'];
                    $date = $_POST['symptom'];
                    $idclass = $_POST['idDoctor'];
                    
                  


                    $conn = new PDO("mysql:host = localhost;dbname=PhongMach", "root", "1234");

                    
                    $sql = "insert into Benhnhan (tenBenhnhan, ngayKham, trieuChung, idDoctor) values ('$name','$date', '$symtom',$idDoctor);";  
                              
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                    

                    
                 
                    if($list_sql->rowCount()>0){
                        echo "<p class='text-center'>Thanh Cong</p>";
                    }
                    else{
                        echo "<p class='text-center'>Lỗi gì đó</p>";
                    }


                }

                if(isset($_GET['err'])){
                    echo "<p class='text-center'>Mật khẩu không Trùng </p>";
                }

                
            ?> 
    </div>



</body>
</html>






<div class="container">


    </div>