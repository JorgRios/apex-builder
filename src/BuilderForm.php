<?php

namespace Jrios\ApexBuilder;

class BuilderForm
{

    /**
     * Get hello word from library.
     *
     * @return string
     */
    protected static function getHello()
    {
        return 'Hola mundo';
    }

    public function getTest($name = null)
    {
        if (is_null($name)) {
            $name = "Anonimo";
        }
        return view('templates.hola', compact('name'));
    }
}
