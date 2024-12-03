<?php
require_once("util-db.php");
require_once("model/categories.php");

$pageTitle = "Page 1";
include "view/header.php";
?>
      
      <h1>Page 1</h1>
      
<?php
$categories = selectCategories();
include "view/categories.php";
include "view/footer.php";
?>
