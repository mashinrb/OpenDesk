<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Opendesk\Comment;
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

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'ticket_id' => random_int(1, 10),
        'user_id' => random_int(1, 10),
        'description' => $faker->realText(),
        'created_by' => random_int(-2147483648, 2147483647),
        'updated_by' => random_int(-2147483648, 2147483647)
    ];
});