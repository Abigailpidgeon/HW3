<?php
require_once("util-db.php");
require_once("model-procedures.php");

$pageTitle = "Procedures";
include "view-header.php";
$procedures = selectProcedures();
include "view-procedures.php";
include "view-footer.php";
?>
