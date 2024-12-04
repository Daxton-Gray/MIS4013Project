<select class="form-select" id="instrument_id" name="instrument_id">
<?php
while ($instrumentItem = $instrumentList->fetch_assoc()) {
  $selText = "";
  if ($selectedInstrument == $instrumentItem['instrument_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $instrumentItem['instrument_id']; ?>"<?=$selText?>><?php echo $instrumentItem['instrument_name']; ?></option>
<?php
}
?>
</select>
