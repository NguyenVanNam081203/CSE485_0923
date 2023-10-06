<?php

include "./Controllers/PatientsController.php";
// include "./Controllers/DoctorCotroller.php";
$controller = isset($_GET['c'])?$_GET['c']:'Patients';
$function = isset($_GET['f'])?$_GET['f']:'index';
$past = $controller . "Cotroller";
$PatientsController = new PatientsCotroller();
$PatientsController->index();
// $DoctorController = new DoctorCotroller();
// $Doctor->index();



// $pp = new $past();

// $pp->$function(isset($_GET['Id'])?$_GET['Id']:'');
