<?php
require_once("util-db.php");
require_once("model-procedures.php");

$pageTitle = "Procedures";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    if (insertProcedures($_POST['pName'],$_POST['pDesc'])){
      echo '<div class="alert alert-success" role="alert"> Procedure added!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Delete":
    if (deleteProcedures($_POST['pid'])){
      echo '<div class="alert alert-success" role="alert"> Procedure deleted!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
}
}

$procedures = selectProcedures();
include "view-procedures.php";
include "view-footer.php";
?>
