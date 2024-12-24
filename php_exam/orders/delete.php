<?php
//orders/delete.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $conditions = ["id" => $_DELETE['id'] ?? null];

    if (in_array(null, $conditions)) {
        echo json_encode(["err" => "Orders ID is required"]);
        exit;
    }

    if ($config->delete("orders", $conditions)) {
        echo json_encode(["status" => "orders deleted successfully"]);
    } else {
        echo json_encode(["err" => "Failed to delete orders"]);
    }
} else {
    echo json_encode(["err" => "Only DELETE method required"]);
}
?>