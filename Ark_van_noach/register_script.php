<?php
if (empty($_POST["email"])) {
header("Location: ./index.php?content=message&alert=no-email");
} else {
include("./connect_db.php");
include("./functions.php");

$email = sanitize($_POST["email"]);
$voornaam = sanitize($_POST["voornaam"]);
$adres = sanitize($_POST["adres"]);
$postcode = sanitize($_POST["postcode"]);
$provincie = sanitize($_POST["provincie"]);
$wachtwoord = sanitize($_POST["wachtwoord"]);

$sql = "SELECT * FROM `register` WHERE `email` = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
header("Location: ./index.php?content=message&alert=emailexists");
} else {

$sql = "INSERT INTO `register` (`id`, `email`, `wachtwoord`, `voornaam`, `adres`, `postcode`, `provincie`, `gebruikersrol`) VALUES (NULL, '$email', '$wachtwoord', '$voornaam', '$adres', '$postcode', '$provincie', 'customer')";
if (mysqli_query($conn, $sql)) {
    header("Location: ./index.php?content=message&alert=register-success");
    } else {
header("Location: ./index.php?content=message&alert=register-error");
    }
}
}

?>