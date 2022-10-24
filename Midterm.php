<?php 
    session_start();

    $_SESSION['MENU_ITEMS'] = array(
        "C1" => [
            "shortname" => "CHIXFILL\n/1/N/M", 
            "longname" => "CRISPY CHICKEN FILLET MEAL w/ FRIES", 
            "price" => "135"
        ],
        "C2" => [
            "shortname" => "CHIXFILL\n/1/K/M", 
            "longname" => "CRISPY CHICKEN FILLET ALA KING MEAL w/ FRIES", 
            "price" => "140"
        ],
        "C3" => [
            "shortname" => "CHIXMCDO\n/1/N/M", 
            "longname" => "1PC CHICKEN MCDO MEAL w/ FRIES", 
            "price" => "156"
        ],
        "C4" => [
            "shortname" => "CHIXMCDO\n/1/S/M", 
            "longname" => "1PC SPICY CHICKEN MCDO MEAL w/ FRIES", 
            "price" => "160"
        ],
        "C5" => [
            "shortname" => "CHIXNUGG\n/6/N/M", 
            "longname" => "6PC CHICKEN MCNUGGETS MEAL w/ FRIES", 
            "price" => "196"
        ],
        "B1" => [
            "shortname" => "CHIXSAND\n/1/N/M", 
            "longname" => "CRISPY CHICKEN SANDWICH MEAL", 
            "price" => "166"
        ],
        "B2" => [
            "shortname" => "CHIZBURG\n/2/N/M", 
            "longname" => "DOUBLE CHEESEBURGER MEAL", 
            "price" => "191"
        ],
        "B3" => [
            "shortname" => "MCHICKEN\n/1/N/M", 
            "longname" => "MCCHICKEN", 
            "price" => "197"
        ],
        "B4" => [
            "shortname" => "QRTPND\n/1/N/M//", 
            "longname" => "QUARTER POUNDER", 
            "price" => "229"
        ],
        "B5" => [
            "shortname" => "BIGMAC\n/1/N/M//", 
            "longname" => "BIG MAC", 
            "price" => "229"
        ],
        "D1" => [
            "shortname" => "APPLEPIE\n/1/N/A", 
            "longname" => "APPLE PIE", 
            "price" => "41"
        ],
        "D2" => [
            "shortname" => "HTSUNDAE\n/1/F/A", 
            "longname" => "HOT FUDGE SUNDAE", 
            "price" => "43"
        ],
        "D3" => [
            "shortname" => "HTSUNDAE\n/1/C/A", 
            "longname" => "HOT CARAMEL SUNDAE", 
            "price" => "43"
        ],
        "D4" => [
            "shortname" => "COKFLOAT\n/1/N/A", 
            "longname" => "COKE MCFLOAT", 
            "price" => "43"
        ],
        "D5" => [
            "shortname" => "MCFLURRY\n/1/O/A", 
            "longname" => "OREO MCFLURRY", 
            "price" => "57"
        ],
        "M1" => [
            "shortname" => "PRCOFFEE\n/1/N/A", 
            "longname" => "PREMIUM ROAST COFFEE", 
            "price" => "44"
        ],
        "M2" => [
            "shortname" => "IDCOFFEE\n/1/O/A", 
            "longname" => "ICED COFFEE ORIGINAL", 
            "price" => "51"
        ],
        "M3" => [
            "shortname" => "IDCOFFEE\n/1/M/A", 
            "longname" => "ICED COFFEE MILKY", 
            "price" => "62"
        ],
        "M4" => [
            "shortname" => "IDCOFFEE\n/1/V/A", 
            "longname" => "ICED COFFEE VANILLA", 
            "price" => "64"
        ],
        "M5" => [
            "shortname" => "IDCOFFEE\n/1/F/A", 
            "longname" => "COFFEE FLOAT", 
            "price" => "76"
        ],
    );

    $_SESSION['FUNCTIONS'] = array(
        "F1" => "add_item",
        "F2" => "remove_item",
        "F3" => "finish_order",
        "F0" => "clear_order",
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order & Pay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="midterm.css">
</head>
<body class="container">
    <div class="row body mt-2">
        <div class="col-6 orderMenu">
            <!-- MENU BUTTONS -->
            <form
                method="post"
                action="<?php
                    echo $_SERVER['PHP_SELF'];
                ?>"
            >
                <!-- CHICKEN MENU -->
                <div>
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="C1"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="C2"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="C3"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="C4"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="C5"
                    />

                </div>
                <!-- BURGER MENU -->
                <div>
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="B1"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="B2"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="B3"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="B4"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="B5"
                    />
                </div>
                <!-- DESSERT MENU -->
                <div>
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="D1"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="D2"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="D3"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="D4"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="D5"
                    />
                </div>
                <!-- MCCAFE MENU -->
                <div>
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="M1"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="M2"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="M3"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="M4"
                    />
                    <input 
                        type="submit"
                        name="add_item"
                        class="button"
                        value="M5"
                    />
                </div>
            </form>
        </div>
        <!-- RECIEPT -->
        <div class="col-6 orderReceipt">
            <form
                method="post"
                action="<?php
                    echo $_SERVER['PHP_SELF'];
                ?>"
            >
                <input 
                    type="submit"
                    name="remove_item"
                    class="button"
                    value="REMOVE"
                />
                <input 
                    type="submit"
                    class="button"
                    value="CLEAR"
                />
                <input 
                    type="submit"
                    name="finish_order"
                    class="button"
                    value="FINISH"
                />
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        if (empty($_POST[$_SESSION['FUNCTIONS']["F1"]])){
                            if (empty($_POST[$_SESSION['FUNCTIONS']["F2"]])){
                                if (empty($_POST[$_SESSION['FUNCTIONS']["F3"]])){
                                    clearOrder();
                                } else {
                                    $finishOrder = $_POST[$_SESSION['FUNCTIONS']["F3"]];
                                    if (array_key_exists($_SESSION['FUNCTIONS']["F3"], $_POST)){
                                        finishOrder($value);
                                    }
                                } 
                            } else {
                                removeItem();
                            }
                        } else {
                            $newItem = $_POST[$_SESSION['FUNCTIONS']["F1"]];
                            if (array_key_exists($_SESSION['FUNCTIONS']["F1"], $_POST)){
                                addItem($newItem);
                            }
                        }
                    }

                    function addItem($addValue){
                        $_SESSION['CURRENT_ORDER'][] = $addValue;
                        $currentOrder = $_SESSION['CURRENT_ORDER'];
                        if (count($currentOrder) != 0){
                            printArray($currentOrder);
                        }
                    }

                    function removeItem(){
                        $currentOrder = $_SESSION['CURRENT_ORDER'];
                        array_pop($currentOrder);
                        $_SESSION['CURRENT_ORDER'] = $currentOrder;
                        if (count($currentOrder) != 0){
                            printArray($currentOrder);
                        }
                    }

                    function finishOrder($orderValue){

                    }

                    function clearOrder(){
                        if(isset($_SESSION['CURRENT_ORDER'])){
                            unset($_SESSION['CURRENT_ORDER']);
                        }
                    }

                    function printArray($Array){
                        $MENU_ITEMS = $_SESSION['MENU_ITEMS'];
                        $arrLength = count($Array);
                        for($x = 0; $x < $arrLength; $x++){
                            echo $MENU_ITEMS[$Array[$x]]['shortname'];
                            echo "\n";
                            echo $MENU_ITEMS[$Array[$x]]['price'];
                            echo "<br>";
                        }
                        echo "<br>";
                    }
                ?>
            </form>
        </div>
    </div>
    <div class="footer">
        <p class="col-12 text-align-center">
            Created by: Divina, Gamboa, Sison
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>