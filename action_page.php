<?php
$input = '';
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['pi_digits'];

    if ($input === "314") {
        $result = "Correct! ✅";
    } else {
        $result = "Incorrect. Try again!";
    }
}
?>