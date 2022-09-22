<?php

namespace Jrios\ApexBuilder;

class Bodys
{
    /**
     * Generador de tabla
     */
    public function tabla(array $options = []){
        
        $elementos = $options[0] ;
        $nombre = $options[1];

        $mostrar = $options[2];
      
        $html =  '<table class="table table-hover table-bordered table-striped">';
        $html .= '<thead><tr>';
        if(count($mostrar)>0){
            foreach ($mostrar as $key => $muestra) {
                $html .= '<th>'.$muestra['nombre'].'</th>';
            }        
        }else{
            //armamos con lo que llegue
        }
        $html .= '</tr></thead>';

        $html .= '<tbody>';

        foreach ($elementos as $key => $elemento) {
            $html .= '<tr>';
            // procedemos a revisar que el array recibido tenga datos de parametrizacion
            if(count($mostrar)>0){
                foreach ($mostrar as $key => $muestra) {
                    $valor = $muestra['key'];
                    $valores = explode('->',$muestra['key']);
                    // if(count($valores)>1){
                    //     dd($valores);
                    // }
                    $html .= '<td>'. $elemento->$valor .'</td>';
                } 
            }else{
                $html .= '';
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        $html .= '</table>';
        return $html;
    }


    /**
     * 
     */

    public function label(){
        return \Form::label('ejemplo', 'ejemplo');
    }
}