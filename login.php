<?php

$imie = "test";
$haslo = "haslo";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imie = $_POST["test"];
    $haslo = $_POST["haslo"];

    if ($username == $test_username && $password == $test_password) {
        echo "gratuluje";
        exit();
    } else {

        header("Location: login.html?error=1");
        echo "zle";
        exit();
    }
}
?>
