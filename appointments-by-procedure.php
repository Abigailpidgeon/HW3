<?php
require_once("util-db.php");
require_once("model-appointments-by-procedure.php");

$pageTitle = "Appointments by Procedure";
include "view-header.php";
$procedure  = selectAppointmentsbyProcedure($_POST['pid']);
include "view-appointment-by-procedures.php";
include "view-footer.php";
?>
