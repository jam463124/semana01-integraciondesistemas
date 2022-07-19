<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class AlumnosController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getAll()
    {
        $alumnos = [];

        $alumno=new \stdClass();

        $alumno ->id="724f76e2-bfc5-41e5-b29d-bb9149425dd9";
        $alumno ->código="A001";
        $alumno ->nombres="Johann Aquije";

        $alumnos[]=$alumno;

        $response->success=true;
        $response->data=$alumnos;

        return response()->json($response,200);
    }
}