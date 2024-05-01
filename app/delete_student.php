<?php
// Database connection
$servername = "database";
$username = "root";
$password = "root";
$dbname = "team";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if student ID is provided in the URL
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Prepare SQL statement to delete student
        $stmt = $conn->prepare("DELETE FROM team WHERE id = :id");

        // Bind parameters
        $stmt->bindParam(':id', $_GET['id']);

        // Execute the prepared statement
        $stmt->execute();

        // Redirect back to the page displaying students after deletion
        header("Location: /team.php");
        exit();
    } else {
        // If student ID is not provided in the URL, redirect back to the page displaying students
        header("Location: /team.php");
        exit();
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
