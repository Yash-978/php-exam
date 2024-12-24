

<?php

//users/create.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        "name" => $_POST['name'] ?? null,
        "email" => $_POST['email'] ?? null,
        "phone" => $_POST['phone'] ?? null,
    ];

    if (in_array(null, $data)) {
        echo json_encode(["error" => "All fields are required"]);
        exit;
    }

    if ($config->create("users", $data)) {
        echo json_encode(["status" => "Users added successfully"]);
    } else {
        echo json_encode(["error" => "Failed to add User"]);
    }
} else {
    echo json_encode(["error" => "Only POST method required"]);

}
?>
