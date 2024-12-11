<div class="row">
  <div class="col">
    <h1>Instrument Inventories</h1>
  </div>
  <div class="col-auto">
<?php
include "view/newform/inventories.php";
?>
  </div>
</div>


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
        <span class="card-title"><?php echo $instrument['instrument_name']; ?></span>
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
                      <?php echo $inventory['brand_name']; ?> 
                      <?php echo $inventory['instrument_name']; ?>
                      <br/><?php echo $inventory['model']; ?>
                      <br/>$<?php echo $inventory['price']; ?>
                      <br/><?php echo $inventory['stock_quantity']; ?> Available
                      <div class="d-flex gap-2 mt-2">
                        <?php include "view/editform/inventories.php"; ?>
                        <form method="post" action="">
                             <input type="hidden" name="inv_id" value="<?php echo $inventory['inventory_id']; ?>">
                             <input type="hidden" name="actionType" value="Delete">
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
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
