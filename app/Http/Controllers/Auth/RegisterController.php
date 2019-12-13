<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;

class RegisterController extends Controller
{
    use RegistersUsers;

    //Enviar al Home luego de registrar al usuario
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    //Valido los datos ingresados por el usuario
    protected function validator(array $data)
    {
      return Validator::make($data, [
        'nombre' => ['required', 'string', 'max:255'],
        'apellido'=> ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'fecha' => ['required', 'date'],
        'avatar' => ['required', 'image']
      ]);
    }

    //Creo un nuevo usuario a partir de los datos ingresados
    protected function create(array $data)
    {
      //Creo la ruta para almacenar al avatar
      $ruta = $data['avatar']->storeAs('public',$data['email']);
      $nombreArchivo = basename($ruta);

     return User::create([
       'nombre' => $data['nombre'],
       'apellido' => $data['apellido'],
       'username'=> $data['username'],
       'email' => $data['email'],
       'password' => Hash::make($data['password']),
       'fecha' => $data['fecha'],
       'avatar' => $nombreArchivo,
     ]);
    }
}
?>
