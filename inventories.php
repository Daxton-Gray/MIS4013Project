<?php
require_once("util-db.php");
require_once("model/inventories.php");

$pageTitle = "Inventory";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertInventory($_POST['brand_id'], $_POST['instrument_id'], $_POST['model'], $_POST['price'], $_POST['stock_quantity'])) {
        echo '<div class="alert alert-success" role="alert">Inventory Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateInventory($_POST['brand_id'], $_POST['instrument_id'], $_POST['model'], $_POST['price'], $_POST['stock_quantity'], $_POST['inv_id'])) {
        echo '<div class="alert alert-success" role="alert">Inventory Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteInventory($_POST['inv_id'])) {
        echo '<div class="alert alert-success" role="alert">Inventory Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$inventories = selectInventories();
include "view/inventories.php";
include "view/footer.php";
?>
