<?php

// Assuming you have already established a connection to your MySQL database

// Check if the request method is POST
echo $_SERVER["REQUEST_METHOD"];
echo "</br>";
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    // Extract data fields
    $name = $_GET['nom'];
    echo $name;  
    // $email = $data['email']; 

    // Validate the data (you may add more validation)
    if (!empty($name) && !empty($email)) {

        // Prepare and execute the SQL query to insert data into the database
        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $email);

        if ($stmt->execute()) {
            // Data insertion successful
            echo "Data saved successfully";
        } else {
            // Data insertion failed
            echo "Error saving data";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        // Invalid or incomplete data received
        echo "Invalid data received";
    }
} else {
    // Request method is not POST
    echo "Only POST requests are allowed";
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>

    </script>
</body>

</html>