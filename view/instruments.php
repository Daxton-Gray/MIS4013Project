<h1>Instruments</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Model</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity Available</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $instrument['item_id']; ?></td>
         <td><?php echo $instrument['item_name']; ?></td>
         <td><?php echo $instrument['model']; ?></td>
         <td><?php echo $instrument['brand_name']; ?></td>
         <td><?php echo $instrument['category_name']; ?></td>
         <td>$<?php echo $instrument['price']; ?></td>
         <td><?php echo $instrument['stock_quantity']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
