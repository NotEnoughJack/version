<?php
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data["version"])) {
    $json = json_encode([
        "current_version" => $data["version"],
        "updated_at" => date("c")
    ], JSON_PRETTY_PRINT);

    file_put_contents("version.json", $json);
    echo json_encode(["status" => "ok"]);
} else {
    http_response_code(400);
    echo json_encode(["error" => "Missing version"]);
}
