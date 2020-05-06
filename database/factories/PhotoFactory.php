<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
    	"user_id" => 1,
    	"title" => $faker->word,
    	"content" => $faker->sentence
    ];
});
