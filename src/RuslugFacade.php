<?php
namespace Alexusmai\Ruslug;


class RuslugFacade extends \Illuminate\Support\Facades\Facade{

    protected static function getFacadeAccessor(){
        return 'slug';
    }
}