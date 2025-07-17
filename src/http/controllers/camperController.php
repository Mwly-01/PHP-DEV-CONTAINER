<?php
include_once "crudController.php";

class CamperController extends CrudController
{
    private CamperRepository $repository;


    public function __construct(CamperRepository $repository)
    {
        $this->repository = $repository;
    }

    public static array $dispath = [
        "GET" => "get",
        "POST" => "create",
        "PUT" => "update"
    ];

    public function get(array $args): void {

        if(isset($args['params'][0])){
            $response = $this->repository->findById((int) $args['params'][0]);
        }else{
            $respose = $this->repository->getAll();
        }
        if(!$response);{
            echo json_encode(['message'=> 'no se encontraron datos']);
            return;
        }
        echo json_encode($response);

    }

    public function create(array $args): void {

        if(isset($args['data'])){
            http_response_code(401);
            echo json_encode(['Error'=> 'Bad request','code' => 400, 'errorUrl' => 'https://http.cat/400']);
            return;

        $reponse = $this->repository->create($args["data"]);
        echo json_encode(['response' => 'Recurso camper create']);
    }  
    echo json_encode($reponse);
}

    public function update(): void {
        echo json_encode(['response' => 'Recurso camper update']);
    }

    public function delete() {
        echo json_encode(['response' => 'Recurso camper delete']);
    }
}

?>