<?php
require_once("util-db.php");
require_once("model-appointments.php");

$pageTitle = "Appointments";
include "view-header.php";

if (isset($_POST['actionType'])){
switch ($_POST['actionType']){
  case "Add":
   if (insertAppointments($_POST['aroom'],$_POST['adaytime'])){
      echo '<div class="alert alert-success" role="alert"> Appointment added!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Edit":
   if (updateAppointments($_POST['aroom'],$_POST['adaytime'],$_POST['aid'])){
      echo '<div class="alert alert-success" role="alert"> Appointment updated!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
  case "Delete":
    if (deleteAppoointments($_POST['aid'])){
      echo '<div class="alert alert-success" role="alert">Appointment deleted!</div>';
        }else{
     echo  '<div class="alert alert-danger" role="alert">Error....</div>';
        }
  break;
}
}

$appointments = selectAppointments();
include "view-appointments.php";
include "view-footer.php";
?>
