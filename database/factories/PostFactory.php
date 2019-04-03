<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        'user_id' => rand(1,30),
        'category_id' => rand(1,20),
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->realText(144),
        'body' => $faker->realText(2000),
        'file' => $faker->imageUrl($width = 1200, $height = 1200)

    ];
});
