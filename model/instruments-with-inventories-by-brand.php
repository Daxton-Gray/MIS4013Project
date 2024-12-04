<?php
  function selectInstrumentsByBrand($bid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM instrument I JOINS inventory IV ON I.instrument_id=IV.instrument_id JOIN brand B ON B.brand_id=IV.brand_id WHERE IV.brand_id=? ORDER BY instrument_name");
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

  function selectInventoriesByInstruments($inst_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM inventory IV JOIN Instrument I ON I.instrument_id=IV.instrument_id JOIN brand B ON B.brand_id=IV.brand_id WHERE IV.instrument_id=? ORDER BY instrument_name, brand_name, model");
        $stmt->bind_param("i", $inst_id);
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
