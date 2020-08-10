<?php

$servername = "localhost";
$username = "root";
$password = "";

    $conn = new \PDO("mysql:host=$servername", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE cupractical";
// use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    $conn->exec("USE unilab");

    $sql = "CREATE TABLE CITY (
  id NUMBER,
  NAME VARCHAR(17),
  countryCODE VARCHAR(3),
  district VARCHAR(20),
  POPULATION NUMBER
  )";
    $conn->exec($sql);

    $query = "select AVG(POPULATION) from CITY";
    $conn->exec($query);

    $query = "select SUM(POPULATION) from CITY";
    $conn->exec($query);
?>