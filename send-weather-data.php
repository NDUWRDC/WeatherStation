<?php


$servername = "localhost";

// REPLACE with your Database name
$dbname = "luzizyye_esp_data";
// REPLACE with Database user
$username = "luzizyye_esp_board";
// REPLACE with Database user password
$password = "Ravens6201";



$api_key = $value1 = $value2 = $value3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
        $value1 = test_input($_POST["value1"]);
        $value2 = test_input($_POST["value2"]);
		$value3 = test_input($_POST["value3"]);
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO Sensor (value1, value2,value3)
        VALUES ('" . $value1 . "', '" . $value2 . "' ,'" . $value3 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    


}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}