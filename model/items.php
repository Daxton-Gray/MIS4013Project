<?php
  function selectItems() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM item I JOIN brand B ON I.brand_id=B.brand_id JOIN category C ON I.category_id=C.category_id ORDER BY item_name, model");
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
