<h1>Accessories</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Accessory ID</th>
        <th>Instrument</th>
        <th>Accessory Name</th>
        <th>Price</th>
        <th>Quantity Available</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($accessory = $accessories->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $accessory['accessory_id']; ?></td>
         <td><?php echo $accessory['instrument_name']; ?></td>
         <td><?php echo $accessory['accessory_name']; ?></td>
         <td>$<?php echo $accessory['accessory_price']; ?></td>
         <td><?php echo $accessory['accessory_stock_quantity']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
