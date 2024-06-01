<?php
include 'database.php';

$sql = "SELECT * FROM tourist_areas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='tourist-area'>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>Location: " . $row["location"] . "</p>";
        echo "<p>Attractions: " . $row["attractions"] . "</p>";
        echo "<p>Cost: $" . $row["cost"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No tourist areas found.";
}

$conn->close();
?>
