<select class="form-select" id="brand_id" name="brand_id">
<?php
while ($brandItem = $brandList->fetch_assoc()) {
  $selText = "";
  if ($selectedBrand == $brandItem['brand_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $brandItem['brand_id']; ?>"<?=$selText?>><?php echo $brandItem['brand_name']; ?></option>
<?php
}
?>
</select>
