<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBrandModal<? echo $brand['brand_id'];?>">
  Open Modal
</button>

<div class="modal fade" id="editBrandModal<? echo $brand['brand_id'];?>" tabindex="-1" aria-labelledby="editBrandModalLabel<? echo $brand['brand_id'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editBrandModalLabel1">Edit Brand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Modal Content Here
      </div>
    </div>
  </div>
</div>
