# Транслитерация для Laravel 5
[![Latest Stable Version](https://poser.pugx.org/alexusmai/ruslug/v/stable)](https://packagist.org/packages/alexusmai/ruslug)
[![Total Downloads](https://poser.pugx.org/alexusmai/ruslug/downloads)](https://packagist.org/packages/alexusmai/ruslug)
[![Latest Unstable Version](https://poser.pugx.org/alexusmai/ruslug/v/unstable)](https://packagist.org/packages/alexusmai/ruslug) [![License](https://poser.pugx.org/alexusmai/ruslug/license)](https://packagist.org/packages/alexusmai/ruslug)

##Установка

``` bash
composer require alexusmai/ruslug
```

Если у вас установлен Laravel 5.4 или более ранней версии, то в `config/app.php` нужно добавить провайдера:

  `Alexusmai\Ruslug\RuslugServiceProvider::class,`

И добавить новый алиас:

  `'Slug'     => Alexusmai\Ruslug\RuslugFacade::class,`

##Использование

Вызов метода: `\Slug::make($text)`
