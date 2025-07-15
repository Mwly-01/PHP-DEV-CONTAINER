<?php
require_once "db.php";
require_once "src/models/camper.php";
require_once "src/models/Persona.php";
require_once "src/models/invitado.php";
require_once "src/models/empleado.php";
// Objeto
// $julian = new Camper('Julian', 36, '1234');

// Todo sobre Julian
// var_dump($julian->informacion()); // Error por falta de parametros

// $julian->edad = 24;

// echo $julian->edad; // 24

// $julian->asginarNombre('Julian el constante joven de otra altura');
// echo '<br>';

// echo $julian->traerDocumento();

// var_dump($julian->informacion());
// echo '<br>';

function ingresarAZonaFranca(Persona $persona): void
{
    echo "Ingreso la persona: {$persona->getNombre()}{$persona->esMayor()}"; 
}

$empleado = new empleado(100, 'julian',24,'04444444', 'cc','administrador',2000);
$invitado = new invitado(10,'Santiago Cruz', 56, '987654321', 'CC','Adrian','karen');
$camper = new Camper('Santiago', '4321', 22,  'CC');


ingresarAZonaFranca($camper);
ingresarAZonaFranca($invitado);
ingresarAZonaFranca($empleado);



exit;










$method = $_SERVER['REQUEST_METHOD'];

// echo json_encode(['data' => $method]);

// localhost:8081/?filter=datos
$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
// echo json_encode($uri);

// Obtener / {path} / {otherPath} / ..{}
// 0 -> products
// 1 -> 1
$recurso = $uri[0];
$id = $uri[1] ?? null;

// header('Content-Type: application/json');

// http://localhost:8081{/....} -> Endpoints
// if($recurso !== 'products') {
//     http_response_code(404);
//     echo json_encode(['error' => 'Recurso no encontrado', 'code' => 404, 'errorUrl' => 'https://http.cat/status/404']);
//     exit;
// }

// switch ($method) {
//     case 'GET':
//         // Relizar SELECT
//         $stmt = $pdo->prepare("SELECT id, name, price FROM products");
//         $stmt->execute();
//         $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         echo json_encode($response);
//         break;

//     case 'POST':
//         // Relizar INSERT
//         $data = json_decode(file_get_contents('php://input'), true);
//         $stmt = $pdo->prepare("INSERT INTO products(name, price) VALUES(?, ?)");
//         $stmt->execute([
//             $data['name'], $data['price']
//         ]);
//         http_response_code(201);
//         $data['id'] = $pdo->lastInsertId();
//         echo json_encode($data);
//         break;

//     case 'PUT':
//         // Realizar UPDATE
//         if(!$id) {
//             http_response_code(400);
//             echo json_encode(['error' => 'ID no encontrado', 'code' => 400, 'errorUrl' => 'https://http.cat/status/400']);
//             exit;
//         }

//         $data = json_decode(file_get_contents('php://input'), true);
//         $stmt = $pdo->prepare("UPDATE products SET id=?, name=?, price=? WHERE id=?");
//         $stmt->execute([
//             $data['id'],
//             $data['name'],
//             $data['price'],
//             $id
//         ]);
//         echo json_encode($data);
//         break;
    
//     case 'DELETE':
//         //Realizar DROP
//         if(!$id) {
//             http_response_code(400);
//             echo json_encode(['error' => 'ID no encontrado', 'code' => 400, 'errorUrl' => 'https://http.cat/status/400']);
//             exit;
//         }
//         // recuperar datos, guardar en variable, eliminar, si esta bien, mostrar
//         $stmt = $pdo->prepare("SELECT id, name, price FROM products WHERE id=?");
//         $stmt->execute([
//             $id
//         ]);
//         $last_delete = $stmt->fetch(PDO::FETCH_ASSOC);


//         $data = json_decode(file_get_contents('php://input'), true);
//         $stmt = $pdo->prepare('DELETE FROM products WHERE id=?');
//         $stmt->execute([
//             $id
//         ]);

//         echo json_encode($last_delete);
//         break;

//     default:
//         echo 'Esa opción no existe';
//         break;
// }
?>