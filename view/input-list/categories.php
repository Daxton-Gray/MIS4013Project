<select class="form-select" id="category_id" name="category_id">
<?php
while ($categoryItem = $categoryList->fetch_assoc()) {
  $selText = "";
  if ($selectedCategory == $categoryItem['category_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $categoryItem['category_id']; ?>"<?=$selText?>><?php echo $categoryItem['category_name']; ?></option>
<?php
}
?>
</select>
