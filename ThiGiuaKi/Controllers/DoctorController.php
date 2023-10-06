<?php 
include "./Services/DoctorService.php";
class DoctorCotroller{

    public function index(){


        $list = new DoctorService();
        $Listt = $list->getAllDoctor();

        include "./View/indexDoctor.php";
    }

}