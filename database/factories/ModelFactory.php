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

# Users 
$factory->define(melblaravel\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

# Posts 
$factory->define(melblaravel\Posts::class, function (Faker\Generator $faker) {
    return [ 
        'title' => $faker->unique()->name,
        'slug' => str_slug($faker->unique()->name,'-'),
        'user_id' => factory(melblaravel\User::class)->create()->id,
        'extract' => $faker->sentence(2),
        'content' => $faker->paragraph(3),
    ];
});


