<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $duration = $_POST["duration"];
    $room = $_POST["room"];

    // You can perform further validation here if needed

    // For simplicity, let's just display the booked details
    echo "<h2>Booking Successful!</h2>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Date: " . htmlspecialchars($date) . "</p>";
    echo "<p>Time: " . htmlspecialchars($time) . "</p>";
    echo "<p>Duration: " . htmlspecialchars($duration) . " hours</p>";
    echo "<p>Room: " . htmlspecialchars($room) . "</p>";
} else {
    echo "Invalid Request";
}
?>