<?php
function get_db_connection(){
    // Connection details
    $host = 'dgwebdesignserver.mysql.database.azure.com';
    $username = 'DGray';
    $password = 'Connect@1234';
    $database = 'project_schema';

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
      return false;
    }

    return $conn;
}
?>
