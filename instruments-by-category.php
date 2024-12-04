<?php
require_once("util-db.php");
require_once("model/instruments-by-category.php");

$pageTitle = "Instruments by Category";
include "view/header.php";

$instruments = selectInstrumentsByCategory($_GET['id']);
include "view/instruments-by-category.php";
include "view/footer.php";
?>
