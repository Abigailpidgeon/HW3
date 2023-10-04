<?php
require_once("util-db.php");
require_once("model-appointments.php");

$pageTitle = "Appointments";
include "view-header.php";
$doctors = selectAppointments();
include "veiw-appointments.php";
include "view-footer.php";
?>
