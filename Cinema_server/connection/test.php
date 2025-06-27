<?php

require("../connection/connection.php");

if ($mysqli->connect_errno) {
    echo "conn fail" . $mysqli-> connect_error;
    exit;
};
echo "succ" . $mysqli->host_info;