<?php

if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $genre = $_POST["genre"];
    $screenWriter = $_POST["screenwriter"];
    $director = $_POST["director"];
    $production = $_POST["production"];
    $actors = $_POST["actors"];
    $year = $_POST["year"];
    $image = $_POST["image"];
    $duration = $_POST["duration"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputAdd($title, $description, $genre, $screenWriter, $director, $production, $actors, $year, $image, $duration) !== false) {
        header("location: ../movies-add.php?error=emptyinput");
        exit();
    }

    createMovie($conn, $title, $description, $genre, $screenWriter, $director, $production, $actors, $year, $image, $duration);



} else {
    header("location: ../movies-add.php");
    exit();
}