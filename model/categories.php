<?php
  function selectCategories() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM category ORDER BY category_name");
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
