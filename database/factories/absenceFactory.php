<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\absence::class, function (Faker $faker) {
    return [
        'etudiant_id' => $faker->numberBetween(1,10) , 
        'niveau'=> ($faker->numberBetween(1,2))."CP" ,
        'groupe' => $faker->numberBetween(1,10) , 
        'module' => $faker->text(10),
        'dateD' =>$faker->dateTime($min = 'now', $timezone = null),
        'dateF'=> $faker->dateTime($min = 'now', $timezone = null) ,
        'justificatif'=> $faker-> imageUrl($width = 640, $height = 480) ,
    ];
});
