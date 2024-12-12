<?php
require_once("util-db.php");
require_once("model/instruments-by-brand.php");

$pageTitle = "Instruments by Brand";
include "view/header.php";

$instruments = selectInstrumentsByBrand($_POST['bid']);
include "view/instruments-by-brand.php";
include "view/footer.php";
?>
