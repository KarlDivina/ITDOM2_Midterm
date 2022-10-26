<?php 
    session_start();

    $_SESSION['MENU_ITEMS'] = array(
        "C1" => [
            "shortname" => "CHIXFILL\n/1/N/M", 
            "longname" => "Chicken Fillet", 
            "price" => "135",
            "image" => "../assets/ChickenFillet.png",
        ],
        "C2" => [
            "shortname" => "CHIXFILL\n/1/K/M", 
            "longname" => "Chicken Fillet Ala King", 
            "price" => "140",
            "image" => "../assets/ChickenFilletAlaKing.png",
        ],
        "C3" => [
            "shortname" => "CHIXMCDO\n/1/N/M", 
            "longname" => "Chicken Mcdo", 
            "price" => "156",
            "image" => "../assets/ChickenMcdo.png",
        ],
        "C4" => [
            "shortname" => "CHIXMCDO\n/1/S/M", 
            "longname" => "Spicy Chicken Mcdo", 
            "price" => "160",
            "image" => "../assets/SpicyChickenMcdo.png",
        ],
        "C5" => [
            "shortname" => "CHIXNUGG\n/6/N/M", 
            "longname" => "6-pc Chicken McNuggets", 
            "price" => "196",
            "image" => "../assets/6pcChickenMcNuggets.png",
        ],
        "C6" => [
            "shortname" => "CHIXNUGG\n/10/N/M", 
            "longname" => "10-pc Chicken McNuggets", 
            "price" => "204",
            "image" => "../assets/10pcChickenMcNuggets.png",
        ],
        "B1" => [
            "shortname" => "BURGMCDO\n/1/C/M", 
            "longname" => "Cheesy Burger McDo", 
            "price" => "135",
            "image" => "../assets/CheesyBurgerMcDo.png",
        ],
        "B2" => [
            "shortname" => "CHIXSAND\n/1/N/M", 
            "longname" => "McCrispy Chicken Sandwich", 
            "price" => "166",
            "image" => "../assets/McCrispyChickenSandwich.png",
        ],
        "B3" => [
            "shortname" => "CHIZBURG\n/2/N/M", 
            "longname" => "Double Cheeseburger", 
            "price" => "191",
            "image" => "../assets/DoubleCheeseburger.png",
        ],
        "B4" => [
            "shortname" => "MCHICKEN\n/1/N/M", 
            "longname" => "McChicken", 
            "price" => "197",
            "image" => "../assets/McChicken.png",
        ],
        "B5" => [
            "shortname" => "QRTPND\n/1/N/M//", 
            "longname" => "Quarter Pounder", 
            "price" => "229",
            "image" => "../assets/QuarterPounder.png",
        ],
        "B6" => [
            "shortname" => "BIGMAC\n/1/N/M//", 
            "longname" => "Big Mac", 
            "price" => "229",
            "image" => "../assets/BigMac.png",
        ],
        "D1" => [
            "shortname" => "APPLEPIE\n/1/N/A", 
            "longname" => "Apple Pie", 
            "price" => "41",
            "image" => "../assets/ApplePie.png",
        ],
        "D2" => [
            "shortname" => "HTSUNDAE\n/1/F/A", 
            "longname" => "Hot Fudge Sundae", 
            "price" => "43",
            "image" => "../assets/HotFudgeSundae.png",
        ],
        "D3" => [
            "shortname" => "HTSUNDAE\n/1/C/A", 
            "longname" => "Hot Caramel Sundae", 
            "price" => "43",
            "image" => "../assets/HotCaramelSundae.png",
        ],
        "D4" => [
            "shortname" => "COKFLOAT\n/1/N/A", 
            "longname" => "Coke McFloat", 
            "price" => "43",
            "image" => "../assets/CokeMcFloat.png",
        ],
        "D5" => [
            "shortname" => "MCFLURRY\n/1/O/A", 
            "longname" => "Oreo McFlurry", 
            "price" => "57",
            "image" => "../assets/Mcflurry.png",
        ],
        "D6" => [
            "shortname" => "ORANGEJC\n/1/N/A", 
            "longname" => "Orange Juice", 
            "price" => "72",
            "image" => "../assets/OrangeJuice.png",
        ],
        "M1" => [
            "shortname" => "PRCOFFEE\n/1/N/A", 
            "longname" => "McCafé Premium Roast", 
            "price" => "44",
            "image" => "../assets/McCafePremiumRoast.png",
        ],
        "M2" => [
            "shortname" => "IDCOFFEE\n/1/O/A", 
            "longname" => "McCafé Iced Coffee Original", 
            "price" => "51",
            "image" => "../assets/McCafeIcedCoffeeOriginal.png",
        ],
        "M3" => [
            "shortname" => "IDCOFFEE\n/1/M/A", 
            "longname" => "McCafé Iced Coffee Milky", 
            "price" => "62",
            "image" => "../assets/McCafeIcedCoffeeMilky.png",
        ],
        "M4" => [
            "shortname" => "IDCOFFEE\n/1/V/A", 
            "longname" => "McCafé Iced Coffee Vanilla", 
            "price" => "64",
            "image" => "../assets/McCafeIcedCoffeeVanilla.png",
        ],
        "M5" => [
            "shortname" => "IDCOFFEE\n/1/C/A", 
            "longname" => "McCafé Iced Coffee Chocolate", 
            "price" => "64",
            "image" => "../assets/McCafeIcedCoffeeChocolate.png",
        ],
        "M6" => [
            "shortname" => "IDCOFFEE\n/1/F/A", 
            "longname" => "McCafé Coffee Float", 
            "price" => "76",
            "image" => "../assets/McCafeCoffeeFloat.png",
        ],
    );

    $_SESSION['FUNCTIONS'] = array(
        "F1" => "add_item",
        "F2" => "remove_item",
        "F3" => "finish_order",
        "F9" => "order_item",
        "F0" => "clear_order",
    );

    $TOTAL_PRICE = $_SESSION['TOTAL_PRICE'];
    $CURRENT_ORDER = $_SESSION['CURRENT_ORDER']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="midterm.css">
</head>
<body class="container-fluid">
    <div>
        <div class="col-12" >
            <h1 class="header-text">
                <a href="Midterm.php">
                    <img src="../assets/logo.png" class="row logo" text-align="center">
                </a>
                McDonald's
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="Midterm.php"><img src="../assets/logo.png" class="navbar-logo" text-align="center"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="orderReciept.php">Cart</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Take a break and have a McDonald's merienda! I'm lovin' it!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (array_key_exists($_SESSION['FUNCTIONS']["F9"], $_POST)){
                $MENU_ITEMS = $_SESSION["MENU_ITEMS"];
                $item = $_POST[$_SESSION['FUNCTIONS']["F9"]];
            } 
        }
    ?>
    <form
        method="post"
        action="Midterm.php"
    >
        <div class="row">
            <div class="col-12">
                <div class="row item_order">
                    <div class="col-4 card">
                        <div class="order_image card-img-top">
                            <?php
                                echo ("<img src=".getImage($item, $MENU_ITEMS).">");
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo ("<h4>".getName($item, $MENU_ITEMS)."</h4>")?></h4>
                            <p class="card-text"><?php echo ("<p>".getPrice($item, $MENU_ITEMS)."</p>") ?></p>
                            <input 
                                type="hidden"
                                name="add_item"
                                value=<?php echo("$item");?>
                            />
                            <input 
                                type="submit"
                                class="btn btn-primary"
                                value="Add to Cart"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (!empty($_POST[$_SESSION['FUNCTIONS']["F1"]])){
                $newItem = $_POST[$_SESSION['FUNCTIONS']["F1"]];
                if (array_key_exists($_SESSION['FUNCTIONS']["F1"], $_POST)){
                    addItem($newItem);
                }
            }
        }

        function addItem($addValue){
            $_SESSION['CURRENT_ORDER'][] = $addValue;
        }

        function calculateTotal($itemPrice){
            $TOTAL_PRICE = $_SESSION['TOTAL_PRICE'];
            $TOTAL_PRICE += $itemPrice;
            $_SESSION['TOTAL_PRICE'] = $TOTAL_PRICE;
        }

        function getName($item, $MENU_ITEMS){
            $itemName = $MENU_ITEMS[$item]['longname'];
            return($itemName);
        }
        function getPrice($item, $MENU_ITEMS){
            $itemPrice = $MENU_ITEMS[$item]['price'];
            return($itemPrice);
        }
        function getImage($item, $MENU_ITEMS){
            $itemImage = $MENU_ITEMS[$item]['image'];
            return($itemImage);
        }    
    ?>
</body>
</html>