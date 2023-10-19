<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    insertProcedures($_POST['ppatname'],$_POST['pinname']);
  break;
}
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
