<?php
require_once("util-db.php");
require_once("model-appointments-by-procedure.php");

$pageTitle = "Appointments by Procedure";
include "veiw-header.php";
$procedure  = selectAppointmentsbyProcedure($_POST['pid']);
include "veiw-appointment-by-procedures.php";
include "veiw-footer.php";
?>
