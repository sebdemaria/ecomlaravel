<?php
use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
  return [
    "nombre"=> $faker->sentence(2),
    "marca"=> $faker->sentence(1),
    "precio"=> $faker->numberBetween(200,1000),
    "color"=> $faker->sentence(1),
    "stock"=> $faker->numberBetween(100,300)
  ];
});
