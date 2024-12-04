<?php
require_once("util-db.php");
require_once("model/inventory-chart-db.php");

$pageTitle = "Inventory Chart";
include "view/header.php";

$inventories = selectInventories();
include "view/inventory-chart.php";
include "view/footer.php";
?>
