<?php 
include "./Services/PatientsService.php";
class PatientsCotroller{

    
    public function index(){
        

        $List = new PatientsService();
        $Listt=  $List->getAllPatients();

        include "./View/indexPatients.php";
    }
    public function delete($Id){
    
        $List = new PatientsService();
        $List->delete_Patients($Id);

    }
}
