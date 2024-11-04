<?php
require_once "config.php";

$id = filter_input(INPUT_POST, 'idusers');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ( $id && $name && $email) {

    $sql->prepare("UPDATE users SET name = :name, email = :email WHERE idusers = :id");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id", $id);

    header("Location: add.php");
    exit;

} else {
    header("Location: add.php");
    exit;
}
