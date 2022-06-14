<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Game.php";
require_once __DIR__ . "/Accessory.php";

// $crocchette = new Food("Cibo", "C001", "gatto", "20/12/2023", "7.90");
// echo $crocchette->printInfo();

// $palla = new Game("Giocattolo", "G001", "Piccola", "Gomma", "13.50");
// echo $palla->printInfo();

// $collare = new Accessory("Accessorio", "A001", "Gatto", "Pelle", "14.30");
// echo $collare->printInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPet.com</title>
</head>
<body>
    <!-- 
        Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
        L'e-commerce vende prodotti per gli animali
        I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
        L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
        Il pagamento avviene con la carta di credito, che non deve essere scaduta.

        BONUS:
        Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
    -->

</body>
</html>