<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  //La vista del Home
  public function index()
  {
    return view('home');
  }
}
?>
