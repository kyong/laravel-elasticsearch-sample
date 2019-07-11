<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'company_id' => factory(App\Models\Company::class)->create()->id,
        'name' => $faker->name,
        'category' => $faker->jobTitle,
        'detail' => $faker->realText(200),
    ];
});
