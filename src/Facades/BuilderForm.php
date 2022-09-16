<?php
namespace Jrios\ApexBuilder\Facades;
use Illuminate\Support\Facades\Facade;

class BuilderForm extends Facade {
    /**
     * Retorna la fachada del consturctor de cruds
     * 
     */
    protected static function getFacadeAccessor()
    {
        return 'builder';
    }
}