<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS movies (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT NOT NULL,
release_date DATE NOT NULL,
cast JSON,
rating TINYINT NOT NULL
);
";

$mysqli->query($query);