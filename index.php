<?php
require_once "src/db.php";

$method = $_SERVER['REQUEST_METHOD'];

// localhost:8081/?filter=datos

$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

//obtener  /{path}/{otherPath}/

$recurso = $uri[0];

header('Content-Type: application/json'); // se va debolver el resultaod como tipo json

if ($recurso !== 'products') {
    http_response_code(404);
    echo json_encode([
        'error' => 'Recurso no encontrado',
        'code' => 404,
        'errorUrl' => 'https://http.cat/404'
    ]);    //haciendo el json para la aplicacion    
    exit;
}

//realizando select

switch ($method) {
    case 'GET':
        $stmt = $pdo->prepare("SELECT id,name,price FROM products");
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($response);
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare("INSERT INTO prooducts(name,price) VALUES (?,?)");
        $stmt->execute($data[''], $data['price']);
        break;
}
