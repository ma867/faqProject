<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 5/4/2019
 * Time: 8:03 PM
 */

use Faker\Generator as Faker;
$factory->define(App\Profile::class, function (Faker $faker){
    return [
        'fname'=> $faker->firstName,
        'lname'=> $faker->lastName,
        'body' =>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});