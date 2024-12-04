<h1>Inventory by Instrument</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Inventory ID</th>
        <th>Instrument</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Price</th>
        <th>Quantity Available</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($inventory = $inventories->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $inventory['inventory_id']; ?></td>
         <td><?php echo $inventory['instrument_name']; ?></td>
         <td><?php echo $inventory['brand_name']; ?></td>
         <td><?php echo $inventory['model']; ?></td>
         <td>$<?php echo $inventory['price']; ?></td>
         <td><?php echo $inventory['stock_quantity']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
