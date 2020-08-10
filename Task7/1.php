<?php


$servername = "localhost";
$username = "root";
$password = "";

    $sql = "CREATE DATABASE unilab";
    $conn->exec($sql);
    echo "Database unilab created successfully<br>";
    $conn->exec("USE unilab");

    $sql = "CREATE TABLE CITY (
  id NUMBER,
  NAME VARCHAR(17),
  countryCODE VARCHAR(3),
  district VARCHAR(20),
  POPULATION NUMBER
  )";
    $conn->exec($sql);


    $sql = "CREATE TABLE COUNTRY (
    CODE VARCHAR(3),
    NAME VARCHAR(44),
    CONTINENT VARCHAR(13),
    REGION VARCHAR(25),
    SURFACEAREA NUMBER,
    INDEPYEAR VARCHAR(5),
    POPULATION NUMBER,
    LIFEEXPECTANCY VARCHAR(4),
    GNP NUMBER,
    GNPOLD VARCHAR(9),
    LOCALNAME VARCHAR(44),
    GOVERNMENTFORM VARCHAR(44),
    HEADOFSTATE VARCHAR(32),
    CAPITAL VARCHAR(4),
    CODE VARCHAR(2)
    )";
    $conn->exec($sql);


    $query = "select CITY,COUNTRY from COUNTRY a join CITY b ON a.CODE=b.CODE where a.CONTINENT = 'Europe'";
    $conn->exec($query);
