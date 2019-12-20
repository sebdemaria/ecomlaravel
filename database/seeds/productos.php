<?php
use Illuminate\Database\Seeder;

class productos extends Seeder
{
    //Creo 50 productos falsos
    public function run()
    {
      factory(App\Producto::class, 50)->create();
    }
}
?>
