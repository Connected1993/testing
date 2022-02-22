<?php

require_once('vendor/autoload.php');

use myLibary\User;

$u = new User();

exit;

$data = file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments');
$data = json_decode($data,true);

dump($data);


// git init - инициализация нового репозитория ( локльного )
// git status - статус (отслеживание доб., изм., файлов)
// .gitignore - создаем файл и заносим туда исключения, файлы которые не будут сохраняться в репозиторий
