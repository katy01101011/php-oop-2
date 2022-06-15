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

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/database.php";
?>

<body>
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
    <main>
        <div class="container">
            <h1>Food</h1>
            <div class="food">
                <?php foreach ($shop["food"] as $snack) { ?>
                    <div class="card">
                        <h2><?php echo $snack->name ?></h2>
                        <h3><?php echo $snack->brand ?></h3>
                        <small><?php echo $snack->weight ?>g</small>
                        <small><?php echo $snack->flavour ?></small>
                        <p><?php echo $snack->description ?></p>
                        <small>€<?php echo $snack->price ?></small>
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
                        <small>€<?php echo $aToy->price ?></small>
                        <button>Add to cart</button>
                    </div>
                <?php } ?>
            </div>
            <!-- <div class="toys">
                <h1>Toys</h1>
                <div class="card">
                    <div class="product-details">
                        <h2>
                            Product
                        </h2>
                    </div>
                    <button>
                        Add to cart
                    </button>
                </div> -->

        </div>
        </div>
    </main>

</body>

</html>