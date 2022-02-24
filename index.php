<?php

require_once('vendor/autoload.php');

use myLibary\User;

$u = new User();
echo 'test';

exit;

$data = file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments');
$data = json_decode($data,true);

dump($data);


// git init - инициализация нового репозитория ( локльного )
// .gitignore - создаем файл и заносим туда исключения, файлы которые не будут сохраняться в репозиторий
// git status - статус (отслеживание доб., изм., файлов)
// git add * или git add . - добавить все файлы в репозиторий
// git commit -m "НазваниеКомита"
// git checkout [хеш] - переключаемся на комит

// git config --global user.name "ВАШЕ ИМЯ"
// git config --global user.email "alexanderbalabas1993@gmail.com"
// git log - вывод логов коммитов
// git remote - посмотреть списко удаленных репозиториев
// git remote add origin [ссылка на ваш репозиторий] - добавить репозиторий с псевдонимом origin
// git push -u origin master - загрузить на сервер
// git clone [ссылка на ваш репозиторий] - скачать репозиторий по ссылке
