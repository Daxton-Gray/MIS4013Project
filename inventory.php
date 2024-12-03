<?php
require_once("util-db.php");
require_once("model/inventory.php");

$pageTitle = "Inventory";
include "view/header.php";



$inventories = selectInventories();
include "view/inventory.php";
include "view/footer.php";
?>
