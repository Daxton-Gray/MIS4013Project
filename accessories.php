<?php
require_once("util-db.php");
require_once("model/accessories.php");

$pageTitle = "Accessories";
include "view/header.php";



$accessories = selectAccessories();
include "view/accessories.php";
include "view/footer.php";
?>
