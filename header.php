<?php

ob_start();
session_start();
include 'baglan.php';

$hastasor = $db->prepare("SELECT * FROM hasta WHERE hasta_Tc=:hasta_Tc");
$hastasor->execute([
    'hasta_Tc' => $_SESSION['patienthasta_Tc']
]);

$say = $hastasor->rowCount();
$hastacek=$hastasor->fetch(PDO::FETCH_ASSOC);

$doktorcheck =$db->query("SELECT doktor_adi FROM doktorlar",PDO::FETCH_ASSOC);

foreach($doktorcheck as $doktorad){
    if($doktorad["doktor_adi"] == $_SESSION['patienthasta_Tc']){
        $say++;
    }
}

if($say==0){
    header('location:index.php?izinsiz');
    exit;
}

$doktorverisor = $db->prepare("SELECT * FROM doktorlar WHERE doktor_adi=:doktor_adi");
$doktorverisor -> execute([
  'doktor_adi' => $_SESSION['patienthasta_Tc']
]);

$doktorveri = $doktorverisor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon Sistemi</title>
    <link rel="icon" href="images/icon.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3f76828ca.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </head>
