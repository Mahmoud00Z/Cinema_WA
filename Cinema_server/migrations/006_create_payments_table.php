<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS payments(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
amount FLOAT(4,2) NOT NULL,
method VARCHAR(255) NOT NULL,
status VARCHAR(255) DEFAULT 'accepted',
paid_at DATETIME DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (user_id) references users(id)
); ";

$mysqli->query($query);