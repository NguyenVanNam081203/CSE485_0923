<?php 
 include "./Models/Dotor.php";
class DoctorService{
   
    private $ListDoctor;
    private $count;

  

    public function getAllDoctor(){
        $conn = new PDO("mysql:host = localhost;dbname=PhongMach", "root", "1234");
        $sql = "select * from Bacsi";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListDoctor = [];

        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
            $Doctor = new Doctor_($row['id'],$row['tenBacsi'],$row['chuyenKhoa']);
            $this->ListDoctor[] = $Doctor;

        }
        return $this->ListDoctor;
    }
    public function getCount() {
        $count = count($this->ListDoctor);
        return $this->count;
    }

}