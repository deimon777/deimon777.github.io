$method = $_SERVER['REQUEST_METHOD'];
 
// tendremos que tratar esta variable para obtener el recurso adecuado de nuestro modelo.
$resource = $_SERVER['REQUEST_URI'];
 
// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch ($method) {
    case 'GET':
        // código para método GET
        break;
    case 'POST':
        $arguments = $_POST;
        // código para método POST
        break;
    case 'PUT':
        parse_str(file_get_contents('php://input'), $arguments);
        // código para método PUT
        break;
    case 'DELETE':
        // código para método DELETE
        break;
}
echo json_encode($response,true); // $response será un array con los datos de nuestra respuesta.