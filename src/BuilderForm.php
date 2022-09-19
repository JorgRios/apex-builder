<?php

namespace Jrios\ApexBuilder;

use BadMethodCallException;
use Jrios\ApexBuilder\Headers;

class BuilderForm
{
    public function __construct(){
        $this->Headers = new Headers();
    }

    public function __call($name , $arguments = null){
        /**
         * Buscamos en los headers
         */
        if (method_exists($this->Headers, $name)) {
            return $this->Headers->$name($arguments);
        } 
        /**
         * Buscamos en los bodys
         */

        /**
         * Buscamos en los footers
         */

        /**
         * Si no encuentra devolvemos el error
         */
        throw new BadMethodCallException("Metodo {$name} no existe. revisar en funciones de las clases");
    }

    /**
     * Get hello word from library.
     *
     * @return cadena
     */
    
    public function getTest($name = null)
    {
        if (is_null($name)) {
            $name = "Anonimo";
        }
        return 'Hola <b>'.$name.'</b>';
    }
}
