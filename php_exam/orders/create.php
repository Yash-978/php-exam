

<?php
//orders/create.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        "status" => $_POST['status'] ?? null,
       
        "order_date" => $_POST['order_date'] ?? null,
    ];

    if (in_array(null, $data)) {
        echo json_encode(["error" => "All fields are required"]);
        exit;
    }

    if ($config->create("orders", $data)) {
        echo json_encode(["status" => "Orders taken successfully"]);
    } else {
        echo json_encode(["error" => "Failed to take order"]);
    }
} else {
    echo json_encode(["error" => "Only POST method required"]);
}
?>



