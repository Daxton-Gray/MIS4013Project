<?php
require_once("util-db.php");
require_once("model/instruments-with-inventories.php");

$pageTitle = "Instruments with Inventories";
include "view/header.php";



$instruments = selectInstruments();
include "view/instruments-with-inventories.php";
include "view/footer.php";
?>