<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Opendesk\Ticket;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'clientname' => $faker->sentence(),
        'issue' => $faker->sentence(),
        'description' => $faker->realText(),
        'created_by' => random_int(-2147483648, 2147483647),
        'updated_by' => random_int(-2147483648, 2147483647),
        'closed_at' => $faker->dateTimeBetween('-30 years', 'now'),
        'service_id' => random_int(1, 10)
    ];
});