<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Administrador',
        'email' => 'adm@adm.com',
        'password' => bcrypt('10101010'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\NCM::class, function (Faker\Generator $faker) {
    return [
        'ncm' => $faker->unique()->numberBetween(88000000,88999999),
        'descricao' => $faker->text(35),
        'ii' => $faker->numberBetween(0,18),
        'ipi' => $faker->numberBetween(0,18),
        'pis' => $faker->numberBetween(0,18),
        'cofins' => $faker->numberBetween(0,18),
    ];
});

$factory->define(App\Produto::class, function (Faker\Generator $faker) {
    return [
        'part_number' => $faker->isbn13, //$faker->numberBetween(9000000000,999999999),
        'descricao' => $faker->text(35),
        'ncm' => App\NCM::find($faker->numberBetween(1,29))->ncm,
        'peso' => $faker->randomFloat(2,0.1,20),
    ];
});

$factory->define(App\Parceiro::class, function (Faker\Generator $faker) {
    return [
        'cnpj' => $faker->numberBetween(10,99) . '.' .
                  $faker->numberBetween(100,999) . '.' .
                  $faker->numberBetween(100,999) . '/0001-' .
                  $faker->numberBetween(10,99),
        'nome' => $faker->text(35),
        'endereco' => $faker->address,
        'telefone' => '(' . $faker->numberBetween(10,80) . ') ' . 
                            $faker->numberBetween(99000,99999) . '-' . 
                            $faker->numberBetween(0000,9999),
        'email' => $faker->companyEmail,
    ];
});