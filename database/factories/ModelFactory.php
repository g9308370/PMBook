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
$factory->define(App\Auth\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'nick' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});

$factory->define(App\Project\Folder::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\File::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'type' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\Member::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'type' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\Method::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'type' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\Types\FileType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\Types\MemberType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
$factory->define(App\Project\File\Types\MethodType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
