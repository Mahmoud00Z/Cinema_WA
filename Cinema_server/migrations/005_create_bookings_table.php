<?php

require_once(__DIR__ . '/../connection/connection.php');

$query = "CREATE TABLE IF NOT EXISTS bookings(
id int auto_increment primary key,
user_id int not null,
showtime_id int not null,
seat_id int not null,
payment_id int ,
booked_at datetime default current_timestamp,
foreign key (user_id) references users(id),
foreign key (showtime_id) references showtimes(id),
foreign key (seat_id) references seats(id),
foreign key (payment_id) references payments(id));";

$mysqli->query($query);