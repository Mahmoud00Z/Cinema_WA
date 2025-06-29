<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS seats (
id INT AUTO_INCREMENT PRIMARY KEY,
showtime_id INT NOT NULL,
FOREIGN KEY (showtime_id) REFERENCES showtimes(id)
);
";

$mysqli->query($query);