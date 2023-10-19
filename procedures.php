<?php
require_once("util-db.php");
require_once("model-procedures.php");

$pageTitle = "Procedures";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    insertProcedures($_POST['pName'],$_POST['pDesc']);
  break;
}
}

$procedures = selectProcedures();
include "view-procedures.php";
include "view-footer.php";
?>
