<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS showtimes (
id INT AUTO_INCREMENT PRIMARY KEY,
movie_id INT NOT NULL,
show_datetime DATETIME NOT NULL,
duration INT NOT NULL,
FOREIGN KEY (movie_id) references movies(id)
);
";

$mysqli->query($query);