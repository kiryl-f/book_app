<?php
$db_name = "book_app";
$conn = new mysqli("localhost", "root", "");
if(!mysqli_select_db($conn, $db_name)) {
    $create_db_sql = "CREATE DATABASE $db_name";
    $conn->query($create_db_sql);
}
$conn->select_db($db_name);
$create_users_table_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255),
    email VARCHAR(255))";
$conn->query($create_users_table_sql);
