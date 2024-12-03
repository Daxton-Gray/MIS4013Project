<?php
require_once("util-db.php");
require_once("model/categories.php");

$pageTitle = "Categories";
include "view/header.php";
?>
      
      <h1>Item Categories</h1>
      
<?php
$categories = selectCategories();
include "view/categories.php";
include "view/footer.php";
?>
