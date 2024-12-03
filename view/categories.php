<h1>Item Categories</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Description</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($category = $categories->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $category['category_id']; ?></td>
         <td><?php echo $category['category_name']; ?></td>
         <td><?php echo $category['description']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
