<?php
  function selectInstruments() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM instrument I JOIN category C ON I.category_id=C.category_id ORDER BY instrument_name");
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

  function selectCategoriesForInput() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT category_id, category_name FROM category ORDER BY category_name");
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

function insertInstrument($category_id, $instrument_name) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `project_schema`.`instrument` (`instrument_id`, `category_id`, `instrument_name`) VALUES (NULL, ?, ?)");
        $stmt->bind_param("is", $category_id, $instrument_name);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

function updateInstrument($category_id, $instrument_name, $inst_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `project_schema`.`instrument` SET `category_id` = ?, `instrument_name` = ? WHERE `instrument_id` = ?");
        $stmt->bind_param("isi", $category_id, $instrument_name, $inst_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

function deleteInstrument($inst_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `project_schema`.`instrument` WHERE instrument_id = ?");
        $stmt->bind_param("i", $inst_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }
?>
