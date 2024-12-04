<?php
require_once("util-db.php");
require_once("model/categories.php");

$pageTitle = "Categories";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCategory($_POST['category_name'], $_POST['description'])) {
        echo '<div class="alert alert-success" role="alert">Category Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateCategory($_POST['category_name'], $_POST['description'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Category Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteCategory($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Category Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$categories = selectCategories();
include "view/categories.php";
include "view/footer.php";
?>
