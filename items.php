<?php
require_once("util-db.php");
require_once("model/items.php");

$pageTitle = "Items";
include "view/header.php";



$items = selectItems();
include "view/items.php";
include "view/footer.php";
?>
