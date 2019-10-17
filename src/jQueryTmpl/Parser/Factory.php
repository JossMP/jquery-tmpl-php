<?php

namespace jossmp\jQueryTmpl\Parser;

class Factory
{
    public function create()
    {
        return new \jossmp\jQueryTmpl\Parser(
            new \jossmp\jQueryTmpl\Element\Factory()
        );
    }
}
