<?php
  function selectAccessories() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM accessory A JOIN Instrument I ON I.instrument_id=A.instrument_id ORDER BY instrument_name, accessory_name");
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
