<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;

class MiddlewareIsAdmin
{
  public function handle($request, Closure $next)
  {
    $usuario = Auth::user();
    if(User::find($usuario->id)) {
      $isAdmin = $usuario->isAdmin;
    }
    //dd($isAdmin);
    if ($isAdmin == true) {
      return redirect('/upload');
    }
    return $next($request);
  }
}
?>
