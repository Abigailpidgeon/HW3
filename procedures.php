<?php
require_once("util-db.php");
require_once("model-procedures.php");

$pageTitle = "Procedures";
include "veiw-header.php";
$procedures = selectProcedures();
include "veiw-procedures.php";
include "veiw-footer.php";
?>
