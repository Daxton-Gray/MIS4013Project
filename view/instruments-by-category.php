<h1>Instruments by Category</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Instrument ID</th>
        <th>Instrument Name</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $instrument['instrument_id']; ?></td>
         <td><?php echo $instrument['instrument_name']; ?></td>
         <td><?php echo $instrument['category_name']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
