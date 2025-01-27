<?php
// Seed logic for the table: blog
return function ($db, $faker) {
    $author_id = $db->query("SELECT id from users WHERE role=0 ORDER BY RAND() LIMIT 1")->single();
    if(!$author_id){
        echo "No author found to seed the blog table." . PHP_EOL;
        return;
    }
    $author_id = $author_id->id;
    
    for ($i = 0; $i < 10; $i++) {
        $db->query("INSERT INTO blogs (author_id, title, thumbnail,body,status,tags) VALUES (:author_id, :title, :thumbnail,:body,:status,:tags)")
            ->bind(':author_id', $author_id)
            ->bind(':title', $faker->name())
            ->bind(':thumbnail', $faker->imageUrl(200, 200, 'people'))
            ->bind(':body', $faker->paragraph())
            ->bind(':status', $faker->randomElement([0, 1])) // Random parent_id (null or random existing ID)
            ->bind(':tags', $faker->randomElement(['Politics', 'News', 'Economics', 'Lifestyle', 'Artist', 'Tech', 'Health', 'Sports', 'Entertainment', 'Education']))
            ->execute();
    }
    echo "Seeded 10 rows into the blog table." . PHP_EOL;
};