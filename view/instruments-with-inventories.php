<div class="row">
  <div class="col">
    <h1>Instruments with Inventory</h1>
  </div>
  <div class="col-auto">
<?php
include "view/newform/inventories.php";
?>
<div class="card-group">
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>
  <div class="card"">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instrument['instrument_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $inventories = selectInventoriesByInstruments($instrument['instrument_id']);
  while ($inventory = $inventories->fetch_assoc()) {
?>
    <li class="list-group-item">
      <?php echo $inventory['brand_name']; ?> <?php echo $inventory['instrument_name']; ?>
      <br/><?php echo $inventory['model']; ?>
      <br/>$<?php echo $inventory['price']; ?>
      <br/><?php echo $inventory['stock_quantity']; ?> Available
    </li>
<?php
  }
?>
      </ul>
      </p>
      
    </div>
  </div>

<?php
}
?>
</div>
