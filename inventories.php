<?php
require_once("util-db.php");
require_once("model/inventories.php");

$pageTitle = "Inventories";
include "view/header.php";



$inventories = selectInventories();
include "view/inventories.php";
include "view/footer.php";
?>
