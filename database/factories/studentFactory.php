<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\students;
use Faker\Generator as Faker;

$factory->define(students::class, function (Faker $faker) {
    return [

            'fullName' =>$faker-> fullName(),
            'address' => $faker-> address(),
            'Hall' => $faker-> Hall(),
        ];
});
