
<?php
//students/read.php
require_once "../config.php";
$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $users = $config->read("users");
    echo json_encode($users);
} else {
    echo json_encode(["err" => "Only GET method required"]);
}
?>
