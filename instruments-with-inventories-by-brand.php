<?php
require_once("util-db.php");
require_once("model/instruments-with-inventories-by-brand.php");

$pageTitle = "Instruments with Inventories by Brand";
include "view/header.php";

$instruments = selectInstrumentsByBrand($_GET['id']);
include "view/instruments-with-inventories-by-brand.php";
include "view/footer.php";
?>
