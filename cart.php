<?php
    session_start();
    include ("conn/connection.php");

    if (isset($_POST["add_to_cart"])) {
        if (isset($_SESSION["shopping_cart"])) {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if (!in_array($_GET['id'], $item_array_id)) {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_image' => $_POST["hidden_image"],
                'item_desc' => $_POST["hidden_desc"],
                'item_quantity' => $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
            } else {
                echo "<script>alert('Item already added')</script>";
                echo "<script>window.location='catalog.php'</script>";
            }
        } else {
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_image' => $_POST["hidden_image"],
                'item_desc' => $_POST["hidden_desc"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["shopping_cart"] as $key => $value) {
                if ($value["item_id"] == $_GET["id"]) {
                    unset($_SESSION["shopping_cart"][$key]);
                    echo "<script>alert('Item Removed')</script>";
                    echo "<script>window.location='shopping-cart.php'</script>";
                }
            }
        }
    }

?>