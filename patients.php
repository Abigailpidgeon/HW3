<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";
$patients = selectPatients();
include "veiw-patients.php";
include "view-footer.php";
?>
