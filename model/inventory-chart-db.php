<?php
function selectInventories() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT COUNT(IV.instrument_id) AS num_instruments, instrument_name, brand_name FROM instrument I JOIN Inventory IV ON I.instrument_id=IV.instrument_id JOIN brand B ON B.brand_id=IV.brand_id GROUP BY instrument_name, brand_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
