<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    if (insertProcedures($_POST['ppatname'],$_POST['pinname'])){
      echo '<div class="alert alert-success" role="alert"> Procedure added!</div>"';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>"';
        }
  break;
}
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
