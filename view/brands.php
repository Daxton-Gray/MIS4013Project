<h1>Brands</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Brand ID</th>
        <th>Brand Name</th>
        <th>Country of Origin</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($brand = $brands->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $brand['brand_id']; ?></td>
         <td><?php echo $brand['brand_name']; ?></td>
         <td><?php echo $brand['country_of_origin']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
