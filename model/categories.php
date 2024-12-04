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

function insertLeague($category_name, $description) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `project_schema`.`category` (`category_id`, `category_name`, `description`) VALUES (NULL, ?, ?)");
        $stmt->bind_param("ss", $category_name, $description);
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

function updateLeague($category_name, $description, $cid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `project_schema`.`category` SET category_name = ?, description = ? WHERE category_id = ?");
        $stmt->bind_param("ssi", $category_name, $description, $cid);
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

function deleteCategory($cid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `project_schema`.`category` WHERE category_id = ?");
        $stmt->bind_param("i", $cid);
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
