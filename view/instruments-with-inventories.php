<div class="accordion" id="accordionExample">
<?php
while ($instrument = $instruments->fetch_assoc()) {
?>  
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#collapse<?php echo $instrument['instrument_id']; ?>" 
              aria-expanded="false" 
              aria-controls="collapse<?php echo $instrument['instrument_id']; ?>">
        <span class="card-title"><?php echo htmlspecialchars($instrument['instrument_name']); ?></span>
      </button>
    </h2>
    <div id="collapse<?php echo $instrument['instrument_id']; ?>" 
         class="accordion-collapse collapse" 
         data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
 $inventories = selectInventoriesByInstruments($instrument['instrument_id']);
 if ($inventories) {
     while ($inventory = $inventories->fetch_assoc()) {
?>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <?php echo htmlspecialchars($inventory['brand_name']); ?> 
                      <?php echo htmlspecialchars($inventory['instrument_name']); ?>
                      <br/><?php echo htmlspecialchars($inventory['model']); ?>
                      <br/>$<?php echo htmlspecialchars($inventory['price']); ?>
                      <br/><?php echo htmlspecialchars($inventory['stock_quantity']); ?> Available
                      <div class="d-flex gap-2 mt-2">
                        <?php include "view/editform/inventories.php"; ?>
                        <form method="post" action="">
                             <input type="hidden" name="inv_id" value="<?php echo htmlspecialchars($inventory['inventory_id']); ?>">
                             <input type="hidden" name="actionType" value="Delete">
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                              <!-- SVG icon -->
                             </button>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
<?php
     }
 } else {
     echo "<p>No inventory data available.</p>";
 }
?>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
</div>
