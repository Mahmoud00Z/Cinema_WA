<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
age TINYINT,
email VARCHAR(255) NOT NULL UNIQUE,
phone VARCHAR(255) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
fav_genres JSON DEFAULT NULL,
role TINYINT NOT NULL DEFAULT 1,   /* wHERE 1 = USER AND 0 = ADMIN */
comms_pref JSON DEFAULT NULL);
";

$mysqli->query($query);