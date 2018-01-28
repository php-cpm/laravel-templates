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

$factory->define(App\Models\BizGroup::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(App\Models\App::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'biz_group_id' => 1,
    ];
});

//$factory->define(App\Models\AppChannel::class, function (\Faker\Generator $faker) {
//
//    $data = [
//        'app_id' => factory(App\Models\App::class)->create()->id,
//        'merchant_id' => factory(App\Models\Merchant::class)->create()->id,
//        'api_key' => \App\Supports\Utils::genSecret(),
//        'api_secret' => \App\Supports\Utils::genSecret(),
//        'merchant_channel_list' => '1,2,3',
//    ];
//
//    return $data;
//});
