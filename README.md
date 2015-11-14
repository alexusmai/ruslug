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

  `Alexusmai\Ruslug\RuslugServiceProvider::class,`

И добавьте новый алиас

  `'Slug'     => Alexusmai\Ruslug\RuslugFacade::class,`

Использование
-------
Вызов метода: `\Slug::make($text)`
