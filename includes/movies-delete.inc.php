<?php

if (isset($_POST["submit"])) {

    $title = $_POST["title"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputDelete($title) !== false) {
        header("location: ../movies-delete.php?error=emptyinput");
        exit();
    }

    deleteMovie($conn, $title);



} else {
    header("location: ../movies-delete.php");
    exit();
}