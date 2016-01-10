<?php namespace Alexusmai\Ruslug;

use Illuminate\Support\Facades\Facade;

class RuslugFacade extends Facade{

    protected static function getFacadeAccessor(){
        return 'slug';
    }
}