<?php
  function selectInstruments() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM instrument ORDER BY instrument_name");
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

  function selectBrandsForInput() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand_id, brand_name FROM brand ORDER BY brand_name");
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

  function selectInstrumentsForInput() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT instrument_id, instrument_name FROM instrument ORDER BY instrument_name");
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

function insertInventory($brand_id, $instrument_id, $model, $price, $stock_quantity) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `project_schema`.`inventory` (`inventory_id`, `brand_id`, `instrument_id`, `model`, `price`, `stock_quantity`) VALUES (NULL, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iisfi", $brand_id, $instrument_id, $model, $price, $stock_quantity);
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

function updateInventory($brand_id, $instrument_id, $model, $price, $stock_quantity, $inv_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `project_schema`.`inventory` SET `brand_id` = ?, `instrument_id` = ?, `model` = ?, `price` = ?, `stock_quantity` = ? WHERE `inventory_id` = ?");
        $stmt->bind_param("iisfii", $brand_id, $instrument_id, $model, $price, $stock_quantity, $inv_id);
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

function deleteInventory($inv_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `project_schema`.`inventory` WHERE instrument_id = ?");
        $stmt->bind_param("i", $inv_id);
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
