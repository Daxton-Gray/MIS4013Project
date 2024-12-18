<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newInventoryModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newInventoryModal" tabindex="-1" aria-labelledby="newInventoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newInventoryModalLabel">New Inventory</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="bid" class="form-label">Brand</label>
<?php
$brandList = selectBrandsForInput();
$selectedBrand = 0;
include "view/input-list/brands.php";
?>
          </div>
          <div class="mb-3">
            <label for="inst_id" class="form-label">Instrument</label>
<?php
$instrumentList = selectInstrumentsForInput();
$selectedInstrument = 0;
include "view/input-list/instruments.php";
?>
          </div>
          <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
          </div>
          <div class="mb-3">
            <label for="stock_quantity" class="form-label">Quantity Available</label>
            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity">
          </div>
          <div class="mb-3">
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
