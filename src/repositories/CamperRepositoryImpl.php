<?php


namespace App\repositories;
use PDO;
use App\repositories\CamperRepository;


class CamperRepositoryImpl implements CamperRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findById(int $id): ?object
    {
        $stmt = $this->db->prepare
        ("SELECT
        id AS ID,
        nombre,
        edad,
        documento,
        tipo_documento AS tipoDocumento,
        CASE
            WHEN nivel_ingles <2 THEN 'BAJO'
            WHEN nivel_ingles > 2 AND nivel_ingles < 4 THEN 'MEDIO'
            ELSE 'ALTO'
        END AS nivelIngles,
        CASE
            WHEN nivel_programacion <2 THEN 'JR'
            WHEN nivel_programacion >2 AND nivel_programacion <=3 THEN 'JR M'
            ELSE 'JR A'
        END AS nivelProgramacion
        FROM campers WHERE id = ?");
        $stmt->execute([$id]);
        $response = $stmt->fetch(PDO::FETCH_ASSOC);
        return $response ? (object)$response : (object)["message" => "No se encontro el camper"];
    }

    public function getAll(): array
    {
        $stmt = $this->db->prepare
        ("SELECT
        id AS ID,
        nombre,
        edad,
        documento,
        tipo_documento AS tipoDocumento,
        CASE
            WHEN nivel_ingles <2 THEN 'BAJO'
            WHEN nivel_ingles > 2 AND nivel_ingles < 4 THEN 'MEDIO'
            ELSE 'ALTO'
        END AS nivelIngles,
        CASE
            WHEN nivel_programacion <2 THEN 'JR'
            WHEN nivel_programacion >2 AND nivel_programacion <=3 THEN 'JR M'
            ELSE 'JR A'
        END AS nivelProgramacion
        FROM campers ");
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }

    public function create(array $data): ?object
    {
        $stmt = $this->db->prepare("INSERT INTO campers(nombre,edad,documento,tipo_documento,nivel_ingles,nivel_programacion) VALUES(?,?,?,?,?,?)");
        $stmt->execute([
            $data['nombre'],
            $data['edad'],
            $data['documento'],
            $data['tipo_documento'],
            $data['skill_ingles'],
            $data['skill_programacion'],
        ]);
        if ($this->db->lastInsertId() > 0) {
            $data['id'] = $this->db->lastInsertId();
            return (object)$data;
        } else {
            return (object)["error" => "Error al insertar la data"];
        }
        
    }

    public function update(int $doc, array $data): object
    {
        $stmt = $this->db->prepare("UPDATE campers SET nombre=?, edad=?, documento=?, tipo_documento=? , nivel_ingles=?, nivel_programacion=? WHERE documento=?");
        $stmt->execute([
            $data['nombre'],
            $data['edad'],
            $data['documento'],
            $data['tipo_documento'],
            $data['skill_ingles'],
            $data['skill_programacion'],
            $doc
        ]);

        if ($stmt->rowCount() > 0) {
            $data['documento'] = $doc;
            return (object)$data;
        } else {
            return (object)["error" => "DTO -> Data Transfer Object..... Composer......"];
        }
    }
    

    public function delete(int $doc): object
    {
        $stmt = $this->db->prepare
        ("SELECT
        id AS ID,
        nombre,
        edad,
        documento,
        tipo_documento AS tipoDocumento,
        CASE
            WHEN nivel_ingles <2 THEN 'BAJO'
            WHEN nivel_ingles > 2 AND nivel_ingles < 4 THEN 'MEDIO'
            ELSE 'ALTO'
        END AS nivelIngles,
        CASE
            WHEN nivel_programacion <2 THEN 'JR'
            WHEN nivel_programacion >2 AND nivel_programacion <=3 THEN 'JR M'
            ELSE 'JR A'
        END AS nivelProgramacion
        FROM campers WHERE documento = ?");
        $stmt->execute([$doc]);
        $response = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $this->db->prepare("DELETE FROM campers WHERE documento=?");
        $stmt->execute([$doc]);

        return $response ? (object)$response : (object)["message" => "No se encontro el camper"];
    }

}
