<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Quill\SampleModule\Models\SampleModule;
use Faker\Generator as Faker;

$factory->define(SampleModule::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
		'content' => $faker->text(200)
    ];
});

