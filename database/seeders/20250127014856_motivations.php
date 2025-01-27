<?php
// Seed logic for the table: motivations
return function ($db, $faker) {
    $author_id = $db->query("SELECT id from users ORDER BY RAND() LIMIT 1")->single()->id;
    for ($i = 0; $i < 10; $i++) {
        $db->query("INSERT INTO motivations (author_id, title, content,status) VALUES (:author_id, :title, :content,:status)")
            ->bind(':author_id', $author_id)
            ->bind(':title', $faker->sentence())
            ->bind(':status', $faker->randomElement([0, 1]))
            ->bind(':content', $faker->paragraph())
            ->execute();
    }
    echo "Seeded 10 rows into the motivations table." . PHP_EOL;
};