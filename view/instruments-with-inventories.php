<h1>Instruments with Inventories</h1>
<div class="scroll-container">
<div class="card-group">
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>
  <div class="card" style="width: 10px;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instrument['instrument_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $inventories = selectInventoriesByInstruments($instrument['instrument_id']);
  while ($inventory = $inventories->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $inventory['brand_name']; ?> <?php echo $inventory['instrument_name']; ?> - <?php echo $inventory['model']; ?> - $<?php echo $inventory['price']; ?> - <?php echo $inventory['stock_quantity']; ?> Units</li>
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
</div>
