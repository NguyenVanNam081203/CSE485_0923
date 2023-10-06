<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script href='/bootstrap-5.3.2-dist/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="/icons-1.11.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container">
        <div class="row justify-content-between m-4 ">
                
                <!-- Thanh menu -->
            <div class="haha d-inline col-md-5">
                <ul class="nav">
                    <li>
                        <h3>Administration</h3>
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
            <div class="col-md-10 g-0">
                    <a href="/View/add_Doctor.php" class="form-group col-md-1 btn btn-success">Add</a>
            </div>
                
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Specialist</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $len = count($Listt);
                                foreach($Listt as $li){
                                    ?>
                                    <tr>
                                    <th scope="row"><?=$li->getId();?></th>
                                    <td><?=$li->getTenBacSi();?></td>
                                    <td><?=$li->getChuyenKhoa();?></td>
                                    <!-- <td><a href="/Views/Edit_Class.php?Id=<?=$li->getId()?>"><i class='bi bi-pen'></i></a></td>
                                    <td><a  href="/index.php?c=Class&f=delete&Id=<?=$li->getId()?>" ><i class='bi bi-trash3' ></i></a></td> -->
                                </tr>
                                    <?php
                                }
                            ?>

                        </tbody>
                    </table>
                <?php
                      
                            ?>  
        </div>    
    </div>

</div>



    <script src='/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>





