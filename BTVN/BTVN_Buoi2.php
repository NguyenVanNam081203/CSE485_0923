<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN_Buoi_2_Hello_Thay</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./BTVN_Buoi2.css?v= <?php echo time(); ?>">
</head>
<body>
    <div class="container-fluid bg-secondary bg-opacity-25">
        <div class="row">
            <div class="col-md-2 vh-100 bg-light" style="border-radius: 10px 10px;">
                    <?php
                        include "./Content/nav_User.php";
                    ?>
            </div>
            <div class="col-md-9 vh-100">
                    <div class="row mt-4 mx-5"> 
                            <?php
                                include "./Content/header_User.php";
                            ?>
                            <hr class=" mt-4 text-light">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="sp-text">Filter</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" name="" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="" placeholder="Mobile" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Group</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-success filter-form fw-bolder"><i class="bi bi-search"></i>Filter</button>
                                                </div>
                                                <div class="col"> 
                                                    <button type="button" class="btn btn-success clear-form fw-bolder">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_content">
                                    <div class="row-content mt-4 d-flex bg-light align-items-center">
                                        <div class="col-md-6">
                                            <h4 class="text-h4">Users</h4>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-success delete-form"><a class="text-light text-decoration-none" href=""></a>Delete</button>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="btn-group btn-add">
                                                 <button type="button" class="btn btn-color"><a class="text-light text-decoration-none" href="">ADD User</a></button>
                                                 <button type="button" class="btn btn-color"><i class="bi bi-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-table bg-light mt-1 ps-4 text-center">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox">
                                                        </th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Gender</th>
                                                        <th>Groups</th>
                                                        <th>Mobile</th>
                                                        <th>Date Of Birth</th>
                                                        <th>Status</th>
                                                        <th style="padding-right: 70px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        for($i=0;$i<8;$i++){
                                                            ?>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>Nguyễn Văn Nam</td>
                                                                <td>vannam@gmail.com</td>
                                                                <td>Nam</td>
                                                                <td>1</td>
                                                                <td>0787186280</td>
                                                                <td>08/12/03</td>
                                                                <td>
                                                                    <div class="circle"></div>
                                                                </td>
                                                                <td>
                                                                    <div class="action">
                                                                        <div class="d-flex">
                                                                            <a href="" class="btn btn-protect shadow me-1"><i class="bi bi-shield-shaded"></i></a>
                                                                            <a href="" class="btn btn-pen shadow me-1"><i class="bi bi-pencil"></i></a>
                                                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal " class="btn btn-delete shadow "><i class="bi bi-trash"></i>
                                                                        <!-- Modal -->
                                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body"> 
                                                                                        Are u sure
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                                        <button type="button" class="btn btn-primary">OK</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div></a>
                                                                        </div>
                                                                    </div>
                                                                </td>   
                                                            </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="row-Pagination">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    Page 1 or 3.
                                                </div>
                                                <div class="col-md-4">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true" class="next"><</span>
                                                            </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"class="next">></span>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                            </div>
                            <span class="text-made position-fixed bottom-0 text-center" style="padding-right: 60vh;">Made with <i class="bi bi-heart-fill"></i> by DexignZone</span>
                    </div>
            </div>
            <div class="col-1 bg-light">
                <?php
                    include "./Content/right_User.php";
                ?>
        </div>
    </div>

<script src="./bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>