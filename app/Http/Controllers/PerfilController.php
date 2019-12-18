<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  //Muestro los datos del usuario
  public function listar()
  {
    if(Auth::user()) {
      $usuario = Auth::user();
      return view('perfil', compact('usuario'));
    }
  }

  //Actualizo la tabla
  public function actualizar(Request $data)
  {
    $this->validate($data, [
      'telefono' => ['integer', 'min:10'],
      'direccion'=> ['string', 'max:255'],
      'localidad' => ['string', 'max:255']
    ]);

    $usuario = Auth::user();
    if(User::find($usuario->id)) {
      $usuario->telefono = $data['telefono'];
      $usuario->direccion = $data['direccion'];
      $usuario->localidad = $data['localidad'];
      $usuario->provincia = $data['provincia'];
    }
    $usuario->save();
    return view('perfil',compact('usuario'));
  }
}
?>
