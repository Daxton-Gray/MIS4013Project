<h1>Categories</h1>
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
         <td>
           <form method="post" action="instruments-by-category.php">
             <input type="hidden" name="cid" value="<?php echo $category['instrument_id']; ?>">
             <button type="submit" class="btn btn-secondary">Instruments</button>
           </form>
         </td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
