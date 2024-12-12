<?php
  function selectInstrumentsByBrand($bid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT distinct I.instrument_id, instrument_name, category_name FROM instrument I JOIN category C ON I.category_id=C.category_id JOIN inventory IV ON IV.instrument_id=I.instrument_id JOIN brand B ON B.brand_id=IV.brand_id WHERE IV.brand_id=? ORDER BY instrument_name");
        $stmt->bind_param("i", $bid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }
?>
