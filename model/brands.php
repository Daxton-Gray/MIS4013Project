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

function insertBrand($brand_name, $country_of_origin) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `project_schema`.`brand` (`brand_id`, `brand_name`, `country_of_origin`) VALUES (NULL, ?, ?)");
        $stmt->bind_param("ss", $brand_name, $country_of_origin);
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

function updateBrand($brand_name, $country_of_origin, $bid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `project_schema`.`brand` SET brand_name = ?, country_of_origin = ? WHERE brand_id = ?");
        $stmt->bind_param("ssi", $brand_name, $country_of_origin, $bid);
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

function deleteBrand($bid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `project_schema`.`brand` WHERE brand_id = ?");
        $stmt->bind_param("i", $bid);
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
