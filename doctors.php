<?php
require_once("util-db.php");
require_once("model-doctors.php");

$pageTitle = "Doctors";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    insertProcedures($_POST['dName'],$_POST['dcName']);
  break;
}
}

$doctors = selectDoctors();
include "view-doctors.php";
include "view-footer.php";
?>
