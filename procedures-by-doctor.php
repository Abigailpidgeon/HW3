<?php
require_once("util-db.php");
require_once("model-procedures-by-doctor.php");

$pageTitle = "Procedures by Doctor";
include "view-header.php";
$procedures = selectProceduresbyDoctor($_GET['id']);
include "view-procedures-by-doctor.php";
include "view-footer.php";
?>
