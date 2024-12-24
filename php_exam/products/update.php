<?php

//products/update.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $data = ["product_name" => $_PUT['product_name'] ?? null];
    $conditions = ["id" => $_PUT['id'] ?? null];

    if (in_array(null, $data) || in_array(null, $conditions)) {
        echo json_encode(["err" => "All fields are required"]);
        exit;
    }

    if ($config->update("products", $data, $conditions)) {
        echo json_encode(["status" => "Products updated successfully"]);
    } else {
        echo json_encode(["err" => "Failed to update course"]);
    }
} else {
    echo json_encode(["err" => "Only PUT method required"]);
}
?>

