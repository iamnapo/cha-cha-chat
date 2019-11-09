<?php


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Message::class, function (Faker\Generator $faker) {

    static $users;

    $users = App\User::limit(100)->get();

    return [
        'sender_id' => $users->count() ? $users->random()->id : factory(App\User::class)->create()->id,
        'receiver_id' => $users->count() ? $users->random()->id : factory(App\User::class)->create()->id,
        'content' => $faker->text,
    ];
});
