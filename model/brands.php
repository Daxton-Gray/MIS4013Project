<?php
  function selectBrands() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM brand ORDER BY brand_name");
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
