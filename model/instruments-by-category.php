<?php
  function selectInstrumentsByCategory($cid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM instrument I JOIN category C ON I.category_id=C.category_id WHERE I.category_id=? ORDER BY instrument_name");
        $stmt->bind_param("i", $cid);
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
