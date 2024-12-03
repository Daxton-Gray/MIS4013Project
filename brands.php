<?php
require_once("util-db.php");
require_once("model/brands.php");

$pageTitle = "Brands";
include "view/header.php";



$brands = selectBrands();
include "view/brands.php";
include "view/footer.php";
?>
