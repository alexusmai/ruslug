# Транслитерация для Laravel 5

Установка
-------
Добавьте в файл `composer.json` строку
"alexusmai/ruslug": "dev-master"

    "require": {
        "alexusmai/ruslug": "dev-master"
    },

Затем выполните команду:
    `composer update`


В `app/config/app.php` добавьте в массив провайдеров.

  `'Alexusmai\Ruslug\RuslugServiceProvider',`

И добавьте новый алиас

  `'Slug'    => 'Alexusmai\Ruslug\RuslugFacade',`

Использование
-------
Вызов метода: `Slug::make($text)`
