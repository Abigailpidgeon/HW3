<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    if (insertPatients($_POST['ppatname'],$_POST['pinname'])){
      echo '<div class="alert alert-success" role="alert"> Patient added!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Edit":
    if (updatePatients($_POST['ppatname'],$_POST['pinname'],$_POST['ppatid'])){
      echo '<div class="alert alert-success" role="alert"> Patient added!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
   case "Delete":
    if (deletePatients($_POST['ppatid'])){
      echo '<div class="alert alert-success" role="alert"> Patient deleted!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
}
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
