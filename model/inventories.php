<?php
  function selectInventories() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM inventory IV JOIN Instrument I ON I.instrument_id=IV.instrument_id ORDER BY instrument_name, model");
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
