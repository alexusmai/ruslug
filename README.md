# Транслитерация для Laravel 5
[![Latest Stable Version](https://poser.pugx.org/alexusmai/ruslug/v/stable)](https://packagist.org/packages/alexusmai/ruslug)
[![Total Downloads](https://poser.pugx.org/alexusmai/ruslug/downloads)](https://packagist.org/packages/alexusmai/ruslug)
[![Latest Unstable Version](https://poser.pugx.org/alexusmai/ruslug/v/unstable)](https://packagist.org/packages/alexusmai/ruslug) [![License](https://poser.pugx.org/alexusmai/ruslug/license)](https://packagist.org/packages/alexusmai/ruslug)

Установка
-------
Добавьте в файл `composer.json` строку
"alexusmai/ruslug": "~0.6"

    "require": {
        "alexusmai/ruslug": "~0.6"
    },

Затем выполните команду:
    `composer install`


В `app/config/app.php` добавьте в массив провайдеров.

  `Alexusmai\Ruslug\RuslugServiceProvider::class,`

И добавьте новый алиас

  `'Slug'     => Alexusmai\Ruslug\RuslugFacade::class,`

Использование
-------
Вызов метода: `\Slug::make($text)`
