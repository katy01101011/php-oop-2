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
            <div class="card">
                <div class="product">
                    <h2>
                        <?php echo $crocchette->name; ?>
                    </h2>
                    <h3>
                        <?php echo $crocchette->brand; ?>
                    </h3>
                    <p>
                        <?php echo $crocchette->description; ?>
                    </p>
                    <small>
                        €<?php echo $crocchette->price; ?>
                    </small>
                </div>
                <button>
                    Add to cart
                </button>
            </div>
        </div>
    </main>

</body>

</html>