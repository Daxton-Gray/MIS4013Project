<?php
require_once("util-db.php");
require_once("model/inventories-by-instrument.php");

$pageTitle = "Inventory by Instrument";
include "view/header.php";

$inventories = selectInventoriesByInstrument($_GET['instrument_id']);
include "view/inventories-by-instrument.php";
include "view/footer.php";
?>
