<h1>Items</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Model</th>
        <th>Brand Name</th>
        <th>Category Name</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($item = $items->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $item['item_id']; ?></td>
         <td><?php echo $item['item_name']; ?></td>
         <td><?php echo $item['model']; ?></td>
         <td><?php echo $item['brand_name']; ?></td>
         <td><?php echo $item['category_name']; ?></td>
         <td>$<?php echo $item['price']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
