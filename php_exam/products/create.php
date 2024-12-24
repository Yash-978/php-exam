<?php

//products/create.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        "product_name" => $_POST['product_name'] ?? null,
        "price" => $_POST['price'] ?? null,
    ];

    if (in_array(null, $data)) {
        echo json_encode(["error" => "All fields are required"]);
        exit;
    }

    if ($config->create("products", $data)) {
        echo json_encode(["status" => "Products added successfully"]);
    } else {
        echo json_encode(["error" => "Failed to add Product"]);
    }
} else {
    echo json_encode(["err" => "Only POST method required"]);
}
?>

