<?

$response = new \stdClass();
$alumnos = [];

$alumno=new \stdClass();
$alumno ->id="724f76e2-bfc5-41e5-b29d-bb9149425dd9";
$alumno ->código="A001";
$alumno ->nombres="Johann Aquije";

$alumnos[]=$alumno;

$response->success=true;
$response->data=$alumnos;

echo json_encode($response);