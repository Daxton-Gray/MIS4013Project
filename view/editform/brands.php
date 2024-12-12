<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBrandModal<? echo $brand['brand_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editBrandModal<? echo $brand['brand_id']; ?>" tabindex="-1" aria-labelledby="editBrandModalLabel<? echo $brand['brand_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editBrandModalLabel<? echo $brand['brand_id']; ?>">Edit Brand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="brand_name<? echo $brand['brand_id']; ?>" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="brand_name<? echo $brand['brand_id']; ?>" name="brand_name" value="<? echo $brand['brand_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="country_of_origin<? echo $brand['brand_id']; ?>" class="form-label">Country of Origin</label>
            <input type="text" class="form-control" id="country_of_origin<? echo $brand['brand_id']; ?>" name="country_of_origin" value="<? echo $brand['country_of_origin']; ?>">
          </div>
            <input type="hidden" name="bid" value="<? echo $brand['brand_id']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
