<?php
require_once("util-db.php");
require_once("model-doctors.php");

$pageTitle = "Doctors";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    if (insertDoctors($_POST['dName'],$_POST['dcName'])){
      echo '<div class="alert alert-success" role="alert"> Doctor added!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Edit":
    if (updateDoctors($_POST['dName'],$_POST['dcName'],$_POST['did'])){
      echo '<div class="alert alert-success" role="alert"> Doctor updated!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Delete":
    if (deleteDoctors($_POST['did'])){
      echo '<div class="alert alert-success" role="alert"> Doctor deleted!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
}
}

$doctors = selectDoctors();
include "view-doctors.php";
include "view-footer.php";
?>
