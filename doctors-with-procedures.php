<?php
require_once("util-db.php");
require_once("model-doctors-with-procedures.php");

$pageTitle = "Doctors with Procedure";
include "view-header.php";
$doctors = selectDoctors();
include "view-doctors-with-procedures.php";
include "view-footer.php";
?>
