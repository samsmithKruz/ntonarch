<?php

// Example Seeder File
// This function will be executed when the seeder is run.
// $db is the database instance and $faker is the Faker instance.

return function ($db, $faker) {

    for ($i = 0; $i < 10; $i++) {
        $db->query("INSERT INTO users (email, password, role, fullname, about, avatar, tel) VALUES (:email, :password, :role, :fullname, :about, :avatar, :tel)")
            ->bind(':fullname', $faker->name())
            ->bind(':about', $faker->paragraph())
            ->bind(':avatar', $faker->imageUrl(200, 200, 'people'))
            ->bind(':tel', $faker->phoneNumber())
            ->bind(':email', $faker->email())
            ->bind(':password', "112")
            ->bind(':role', $faker->randomElement([rand(0, 3)])) // Random parent_id (null or random existing ID)
            ->execute();
    }
};
