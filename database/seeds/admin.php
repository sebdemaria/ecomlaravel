<?php
use Illuminate\Database\Seeder;

class admin extends Seeder
{
  public function run()
  {
    DB::table('users')->insert(
      [
        'nombre' => 'admin',
        'apellido' => 'biser',
        'username' => 'isadmin',
        'email' => 'admin@gmail.com',
        'password' => password_hash('biser1234', PASSWORD_DEFAULT),
        'fecha' => '2019-12-20',
        'avatar' => 'admin',
        'isAdmin' => true
    ]);
  }
}
?>
