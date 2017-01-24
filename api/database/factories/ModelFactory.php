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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    $dateTime = $faker->dateTime();

    return [
        'user' => $faker->name,
        'pass' => bcrypt($faker->password),
        'fm' => 0,
        'exp' => $faker->numberBetween(0, 100000),
        'inserted' => $faker->numberBetween(0, 100000),
        'tested' => $faker->numberBetween(0, 100),
        'banned' => $faker->numberBetween(0, 10000),
        'granted' => $faker->numberBetween(0, 50),
        'created_at' => $dateTime,
        'updated_at' => $dateTime
    ];
});
