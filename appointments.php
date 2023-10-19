<?php
require_once("util-db.php");
require_once("model-appointments.php");

$pageTitle = "Appointments";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
    insertProcedures($_POST['aroom'],$_POST['adaytime']);
  break;
}
}

$appointments = selectAppointments();
include "view-appointments.php";
include "view-footer.php";
?>
