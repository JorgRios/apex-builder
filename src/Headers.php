<?php

namespace Jrios\ApexBuilder;

use Illuminate\Support\Facades\Route;

class Headers
{
    /**
     * Funcion para crear los headers con pestañas
     * 
     */

    public function pestanias($elements = [])
    {
        $elements= $elements[0];
        if(count($elements)>0){
            $text = '<ul class="nav nav-tabs">';
            foreach ($elements as $elemento) {
                if(array_key_exists('parent',$elemento)){
                    $text .= '<li class="nav-item dropdown">';
                    $text .= '<a class="nav-link dropdown-toggle ';
                    $aux = 'text-muted';
                    foreach ($elemento['children'] as $key => $depen) {
                        if(Route::is($depen['route'])){
                            $aux = 'active';
                        }
                    }
                    $text .= $aux;
                    $text .= '" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">'.$elemento['parent'].'</a>';
                    $text .= '<ul class="dropdown-menu">';
                    foreach ($elemento['children'] as $key => $depend) {
                        $text .= '<li><a class="dropdown-item" href="'.route($depend['route']).'">'.$depend['name'].'</a></li>';
                    }
                    $text .= '</ul></li>';
                }else{
                    $text .= '<li class="nav-item">';
                    $text .= '<a  class="nav-link ';
                    if(Route::is($elemento['route'])){
                        $text .= 'active"';
                    }else{
                        $text .= 'text-muted" ';
                    }
                    $text .= ' aria-current="page" ';
                    $text .= 'href="';
                    $text .= route($elemento['route']);
                    $text .= '">'.$elemento['name'].'</a><li>';
                }
            }
            $text .= '</ul>';
        }else{
            $text = "";
        }
        return $text;
    }
}