<?php
namespace Jrios\ApexBuilder\Facade;
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