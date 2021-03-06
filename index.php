<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>4Pets shop</title>
</head>

<!-- Visualizzazione errori sul browser -->
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<?php
// Recupero tutti i file con i dati che mi servono
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/database.php";
?>

<body>
    <!-- Header -->
    <header>
        <span class="logo">
            4Pets
        </span>
        <div class="menu">
            <button>
                <i class="fas fa-paw"></i>
            </button>
            <button class="cart">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <div class="container">
            <div class="cart-container">
                <h1>Cart</h1>
                <ul>
                    <?php
                    $utente = new User;
                    $karolina = new User();
                    $karolina->addToCart($crocchetteMyPet);
                    $karolina->addToCart($scatolettaCesar);
                    foreach ($karolina->cart as $item) { ?>
                        <li>
                            <h2><?php echo $item->name ?></h2>
                            <small><?php echo $item->price ?></small>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="shop-container">
                <h1>Food</h1>
                <div class="food">
                    <?php foreach ($shop["food"] as $snack) { ?>
                        <div class="card">
                            <h2><?php echo $snack->name ?></h2>
                            <h3><?php echo $snack->brand ?></h3>
                            <small><?php echo $snack->weight ?>g</small>
                            <small><?php echo $snack->flavour ?></small>
                            <p><?php echo $snack->description ?></p>
                            <small>???<?php echo $snack->price ?></small>
                            <button>Add to cart</button>
                        </div>
                    <?php } ?>
                </div>
                <h1>Toys</h1>
                <div class="food">
                    <?php foreach ($shop["toys"] as $aToy) { ?>
                        <div class="card">
                            <h2><?php echo $aToy->name ?></h2>
                            <h3><?php echo $aToy->brand ?></h3>
                            <small><?php echo $aToy->type ?>g</small>
                            <small><?php echo $aToy->material ?></small>
                            <p><?php echo $aToy->description ?></p>
                            <small>???<?php echo $aToy->price ?></small>
                            <button>Add to cart</button>
                        </div>
                    <?php } ?>
                </div>
                <h1>Hygiene</h1>
                <div class="food">
                    <?php foreach ($shop["hygiene"] as $product) { ?>
                        <div class="card">
                            <h2><?php echo $product->name ?></h2>
                            <h3><?php echo $product->brand ?></h3>
                            <small><?php echo $product->type ?>g</small>
                            <small><?php echo $product->quantity ?></small>
                            <p><?php echo $product->description ?></p>
                            <small>???<?php echo $product->price ?></small>
                            <button>Add to cart</button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
</body>

</html>