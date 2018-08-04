<?php

use Faker\Generator as Faker;


$factory->define(App\Question::class, function (Faker $faker) {
    return [

        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'question_tag' => $faker->randomElement($array= array('Laravel','php','sql','Java')),
    ];
});