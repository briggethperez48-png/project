<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function __construct() {
            $this->middleware('auth')->except(['create','store','fetch']);
    }

    public function index() {
        $datoR['registros']=Registro::paginate(20);
            return view('formulario.index', $datoR);
    }

        //Registro
    public function create() {
         $institucion_list = DB::table('instituciones')
                        ->select('idInsti','instiPro')
                        ->get();
        $presenciales = Registro::where('Modalidad','PRESENCIAL')->count();
        $cuposDisponibles = 250 - $presenciales;
       
        return view('formulario.create', compact(
            'institucion_list',
            'presenciales',
            'cuposDisponibles'
        ));
    }

        //Búsqueda de las Unidades basada en la institución.
    function fetch(Request $request) {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
        $data = DB::table('unidades')
                    ->where('idInsti', $value)
                    ->select('unidad')
                    ->get();
         $output = '<option value="">Selecciona unidad</option>';

         foreach($data as $row){
            $output .= '<option value="'.$row->unidad.'">'
                        .$row->unidad.'</option>';
        }

        return $output;
    }

        //Almacena, valida y altera los datos.
    public function store(Request $request) {
        $campos=[
            'Nombre' => 'required|string|max:30',
            'ApellidoPaterno' => 'required|string|max:30',
            'ApellidoMaterno' => 'required|string|max:30',
            'Profesion' => 'required|string|max:75',
            'Institucion' => 'required|string',
            'UnidadMedica' => 'required|string',
            'EstadoProcedencia' => 'required|string|max:75',
            'Pais' => 'required|string|max:75',
            'Edad' => 'required',
            'Sexo' => 'required',
            'Modalidad' => 'required',
            'Numero' => 'required',
            'Eres' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable',
        ];
        $mensaje=[
            'required'=>'El campo ":attribute" es requerido.'
        ];
        $this->validate($request,$campos,$mensaje);

        $datosUsuario = request()->except('_token','email','password');
        
        $presenciales = registro::where('Modalidad','PRESENCIAL')->count();
        if($datosUsuario['Modalidad'] == 'PRESENCIAL' && $presenciales >= 250){
                $datosUsuario['Modalidad'] = 'VIRTUAL';
            return redirect()->back()
                ->with('mensaje','Los cupos presenciales ya se llenaron. Se te registró en modalidad VIRTUAL.')
                ->withInput();
        }

        foreach ($datosUsuario as $key => $value) {
            if($key != 'email' && $key != 'password'){
                $datosUsuario[$key] = strtoupper($value);
            }
        }

        //Modalidad
        $presenciales = Registro::where('Modalidad','PRESENCIAL')->count();
        if($presenciales >= 250){
            $datosUsuario['Modalidad'] = 'VIRTUAL';

            return redirect()->back()
                ->with('mensaje','SE ALCANZÓ EL LÍMITE DE 40 INSCRIPCIONES PRESENCIALES. SE TE INSCRIBIÓ EN MODALIDAD VIRTUAL.')
                ->withInput();
        }

        $user = User::create([
            'name' => $request->Nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            Auth::login($user);
        
        $datosUsuario['user_id'] = $user->id;

        Registro::create($datosUsuario);

        return redirect('content/objetivos')
            ->with('mensaje','¡Gracias por tu suscripción!');
    }

        //Tal vez se use
    public function show(Registro $registro)
    {
        //
    }

    public function edit($id) {
        $institucion_list = DB::table('instituciones')
                        ->select('idInsti','instiPro')
                        ->get();

        $emplead1 = Registro::findOrFail($id);
        $unidades_list = DB::table('unidades')
                        ->where('idInsti', $emplead1->Institucion)
                        ->select('unidad')
                        ->get();

        $presenciales = Registro::where('Modalidad','PRESENCIAL')->count();
        $cuposDisponibles = 250 - $presenciales;

        return view('formulario.edit', compact(
                                        'emplead1',
                                        'institucion_list',
                                        'presenciales',
                                        'cuposDisponibles',
                                        'unidades_list'
                                        ))
                                        
            ->with('institucion_list', $institucion_list);
    }

    public function update(Request $request, $id) {
        $campos=[
            'Nombre' => 'required|string|max:30',
            'ApellidoPaterno' => 'required|string|max:30',
            'ApellidoMaterno' => 'required|string|max:30',
            'Profesion' => 'required|string|max:75',
            'Institucion' => 'required|string',
            'UnidadMedica' => 'required|string',
            'EstadoProcedencia' => 'required|string|max:75',
            'Pais' => 'required|string|max:75',
            'Edad' => 'required|integer|min:18|max:80',
            'Sexo' => 'required',
            'Modalidad' => 'required',
            'Numero' => 'required|integer|digits:10',
            'Eres' => 'required|string',
            'email' => 'required|email|max:50',
            'password' => 'nullable|min:8|max:15',
        ];
        $mensaje=[
            'required'=>'El campo ":attribute" es requerido.',
            'Edad.min' => 'Error en el campo ":attribute". Favor de rectificar',
            'Edad.max' => 'Error en el campo ":attribute". Favor de rectificar',
            'Numero.digits' => 'Error en el campo ":attribute". Favor de rectificar',
            'email.email' => 'Error en el campo ":attribute". Favor de rectificar',
            'password.min' => 'Error en el campo ":attribute". Favor de rectificar'
        ];
        $request->validate($campos,$mensaje,[
            'Nombre'=>'Nombre',
            'ApellidoPaterno'=>'Apellido paterno',
            'ApellidoMaterno'=>'Apellido materno',
            'Edad'=>'edad',
            'Numero'=>'número telefónico',
            'password' => 'contraseña'
        ]);
        $this->validate($request,$campos,$mensaje);
        
        $datosUsuario = request()->except(['_token','_method']);

        if($request->password){
            $datosUsuario['password'] = Hash::make($request->password);
        }else{
            unset($datosUsuario['password']);
        }

        registro::where('id','=',$id)->update($datosUsuario);
        return redirect('formulario')
            ->with('mensaje','¡Éxito! Editaste un usuario');
    }

    public function destroy($id) {
        registro::destroy($id);
        return redirect('formulario')
            ->with('mensaje','¡Éxito! Usuario eliminado');
    }
}
