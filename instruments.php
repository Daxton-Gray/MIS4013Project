<?php
require_once("util-db.php");
require_once("model/instruments.php");

$pageTitle = "Instruments";
include "view/header.php";



$instruments = selectInstruments();
include "view/instruments.php";
include "view/footer.php";
?>
