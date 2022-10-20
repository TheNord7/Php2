<?php

use App\Blog\Post;
use App\User\Name;
use App\User\Person;

// require_once __DIR__ . '/vendor/autoload.php';
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
    require $file;
    }
    }
);

$post = new Post(
    new Person(
    new Name('Иван', 'Никитин'),
    new DateTimeImmutable()
    ),'Всем привет!'
);
print $post;
