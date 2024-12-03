<h1>Instruments with Inventories</h1>
<div class="card-group">
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instrument['instrument_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $inventories = selectInventoriesByInstrument($instrument['instrument_id']);
  while ($inventory = $inventories->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $inventory['brand_name']; ?> <?php echo $inventory['instrument name']; ?> - <?php echo $inventory['model']; ?> - $<?php echo $inventory['price']; ?> - <?php echo $inventory['stock_quantity']; ?> Units</li>
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
