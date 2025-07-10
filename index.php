<?php
require_once "src/db.php";

$method = $_SERVER['REQUEST_METHOD'];

// localhost:8081/?filter=datos

$uri = explode('/',trim($_SERVER['REQUEST_URI'], '/'));

echo json_encode($uri);