<?php

namespace jossmp\jQueryTmpl\Markup;

class Factory
{
    public function createFromString($str)
    {
        return new \jossmp\jQueryTmpl\Markup\StringS($str);
    }

    public function createFromFile($filename)
    {
        return new \jossmp\jQueryTmpl\Markup\File($filename);
    }
}
