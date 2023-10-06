<?php 
 include "./Models/Patients.php";
class PatientsService{
   
    private $ListPatients;
    private $count;

    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=PhongMach", "root", "1234");
        $sql = "select * from Benhnhan";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListPatients = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $Patients = new Patients($row['id'],$row['tenBenhNhan'],$row['ngayKham'],$row['trieuChung'],$row['idBacsi']);
            $this->ListPatients[] = $Patients;

        }
    }

    public function getAllPatients(){
        return $this->ListPatients;
    }
    
    public function getCount() {
        $count = count($this->ListPatients);
        return $this->count;
    }
    public function delete_Patients($Id){
    

        $conn = new PDO("mysql:host = localhost;dbname=PhongMach", "root", "1234");
        $sql = "DELETE FROM Benhnhan WHERE id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        
        header('location:/index.php');


    }
}