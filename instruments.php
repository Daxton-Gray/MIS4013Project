<?php
require_once("util-db.php");
require_once("model/instruments.php");

$pageTitle = "Instruments";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertInstrument($_POST['category_id'], $_POST['instrument_name'])) {
        echo '<div class="alert alert-success" role="alert">Instrument Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateInstrument($_POST['category_id'], $_POST['instrument_name'], $_POST['inst_id'])) {
        echo '<div class="alert alert-success" role="alert">Instrument Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteInstrument($_POST['inst_id'])) {
        echo '<div class="alert alert-success" role="alert">Instrument Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$instruments = selectInstruments();
include "view/instruments.php";
include "view/footer.php";
?>
