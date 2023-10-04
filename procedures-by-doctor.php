<?php
require_once("util-db.php");
require_once("model-procedures-by-doctor.php");

$pageTitle = "Procedures by Doctor";
include "veiw-header.php";
$courses = selectProceduresbyDoctor($_GET['id']);
include "veiw-procedures-by-doctor.php";
include "veiw-footer.php";
?>
