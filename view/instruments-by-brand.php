<h1>Instruments</h1>
<div class="table-responsive rounded">
  <table class="table">
    <thead>
      <tr>
        <th>Instrument ID</th>
        <th>Instrument Name</th>
        <th>Category</th>
        <th></th>
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
         <td><a href="inventories-by-instrument.php?id=<?php echo $instrument['instrument_id']; ?>">Inventory</a></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
