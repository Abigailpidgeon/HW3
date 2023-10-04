<?php
require_once("util-db.php");
require_once("model-doctors-with-procedures.php");

$pageTitle = "Doctors with Procedure";
include "veiw-header.php";
$doctors = selectDoctors();
include "veiw-doctors-with-procedures.php";
include "veiw-footer.php";
?>
