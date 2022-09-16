<?php

namespace Jrios\ApexBuilder;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Route;
class BuilderForm
{

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

    /**
     * Genera las pestañas del navegador
     */

    public function header($elements = [])
    {
        if(count($elements)>0){
            $text = '<ul class="nav nav-tabs">';
            foreach ($elements as $key => $element) {
                $text .= '<li class="nav-item">';
                $text .= '<a  class="nav-link ';
                if(Route::is($element['route'])){
                    $text .= 'active"';
                }else{
                    $text .= 'text-muted" ';
                }
                $text .= ' aria-current="page" ';
                $text .= 'href="';
                $text .= route($element['route']);
                $text .= '">'.$element['name'].'</a><li>';
            }
            $text .= '</ul>';
        }else{
            $text = "";
        }
        return $text;
    }

    /**
     * 
     */
    public function table()
    {

    }


}
