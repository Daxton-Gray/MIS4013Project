<h1>Inventory</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Inventory ID</th>
        <th>Item Name</th>
        <th>Model</th>
        <th>Price</th>
        <th>Quantity Available</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($inventory = $inventories->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $inventory['item_id']; ?></td>
         <td><?php echo $inventory['item_name']; ?></td>
         <td><?php echo $inventory['model']; ?></td>
         <td>$<?php echo $inventory['price']; ?></td>
         <td><?php echo $inventory['stock_quantity']; ?> Units</td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
