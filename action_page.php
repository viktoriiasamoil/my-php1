<?php



if (isset($_POST)) {
    echo("You name is " . $_POST['name']);
    echo("<br>Your phone number is " . $_POST['phone']);
    echo("<br>You have successfully registered." . $_POST['message']);
}