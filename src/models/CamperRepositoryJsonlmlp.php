<?php
require_once "CamperRepository.php";

class CamperRepositoryJsonlmlp implements CamperRepository{



public function findById(int $id): ?object
{

   return;
}
public function getAll(): array    {

    $stmt = $this->db->prepare("SELECT * FROM campers ORDER BY id ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function create(array $data): ?object
{
 $stmt = $this->db->prepare("INSERT INTO  campers(nombre.edad,documento,tipo_documento,nivel_ingles,nivel_programacion) VALUES(?.?.?.?.?.?)");
 $stmt->execute([
    $data['nombre'],
    $data['edad'],
    $data['documento'],
    $data['tipo_documento'],
    $data['skill_ingles'],
    $data['skill_programacion'],
 ]);
 if($this->db->lastInsertId()> 0){
    $data['id'] = $this->db->lastInsertId();
 }
 return(object)$data;
}
public function update(): object{

    return json_decode('');
}
}