<?php
require_once("util-db.php");
require_once("model-appointments.php");

$pageTitle = "Appointments";
include "view-header.php";
$appointments = selectAppointments();
include "view-appointments.php";
include "view-footer.php";
?>
