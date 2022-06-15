<?php
    require_once __DIR__ . "/Product.php";
    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Toy.php";

    $shop = [];

    // Creo elementi del Food
    $crocchetteMyPet = new Food ("Crocchette", "My Pet", "Buonissime crocchette", 3.99, 1000, "Chicken");
    $scatolettaCesar = new Food ("Scatoletta", "Cesar", "Il cibo gourmet per il tuo amico a 4 zampe", 3.99, 150, "Beef");
    $biscottiMera = new Food ("Biscotti", "Mera", "Un momento di piacere per il tuo cane", 6.99, 300, "vanilla");
    $snackEdgardCooper = new Food ("Snack", "Edgard & Cooper", "Uno tira l'altro", "0.99", 25, "Anatra e Pollo");
    $bocconciniNaturalpet = new Food ("Bocconcini", "Naturalpet", "Un po' di energia in più", 0.75, 415, "Manzo e Verdure");
    
    // Pusho i prodotti dentro shop
    $shop["food"][] = $crocchetteMyPet;
    $shop["food"][] = $scatolettaCesar;
    $shop["food"][] = $biscottiMera;
    $shop["food"][] = $snackEdgardCooper;
    $shop["food"][] = $bocconciniNaturalpet;

    // Creo elementi del Toy
    $ossoHappyDog = new Toy ("Osso", "Happy Dog", "Un bell'osso da sbranare", 9.99, "Masticabile", "Osso");
    $cordaTrixie = new Toy ("Corda", "Trixie", "Chi molla, perde", 0.99, "Agilità", "Cotone");
    $frisbeeSinsay = new Toy ("Frisbee", "Sinsay", "Attenzione ai deeeentiiiiiiii", 1.99, "Agilità", "Plastica");
    $pelucheAnatra = new Toy ("Ducky", "Benobby", "Resistente ai morsi e fa qua qua", 29.99, "Peluche", "Cotone");
    $pallNodi = new Toy ("Palla intrecciata", "Benobby", "Un mondo di divertimento", 4.99, "Agilità", "Cotone");

    // Pusho i prodotti dentro shop
    $shop["toys"][] = $ossoHappyDog;
    $shop["toys"][] = $cordaTrixie;
    $shop["toys"][] = $frisbeeSinsay;
    $shop["toys"][] = $pelucheAnatra;
    $shop["toys"][] = $pallNodi;

    // var_dump($shop);
?>