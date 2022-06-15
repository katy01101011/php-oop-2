<?php
    require_once __DIR__ . "/Product.php";
    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Toy.php";
    require_once __DIR__ . "/Hygiene.php";


    $shop = [
        "food" => [],
        "toys" => [],
        "hygiene" => [],
    ];

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

    // Creo elementi di Hygiene
    $scioglinodi = new Hygiene("Scioglinodi", "Shiny", "Basta poco per scigliere tutti i nodi", 27.99, "250ml", "spray");
    $orecchie = new Hygiene("Salviette detergenti per orecchie", "Friends", "Nessuna lacrima lascerà più tracce", 1.99, "30pz", "Salviette");
    $shampoo = new Hygiene("Shampoo mela&eucalipto", "Papaya", "Meglio dello shampoo degli umani", 23.99, "250ml", "Bottle");
    $dentifricio = new Hygiene("Gel igiene orale", "Papaya", "Ora sì che posso abbaiare senza sentirmi in imbarazzo", 12.99, "70g", "Bottle");
    $detergenteOcchi = new Hygiene("Detergente contorno occhi", "Naturalpet", "Con questo non ci sono tracce di occhiaie", 24.99, "300ml", "Bottle");

    // Pusho i prodotti dentro shop
    $shop["hygiene"][] = $scioglinodi;
    $shop["hygiene"][] = $orecchie;
    $shop["hygiene"][] = $shampoo;
    $shop["hygiene"][] = $dentifricio;
    $shop["hygiene"][] = $detergenteOcchi;

    // var_dump($shop);
?>