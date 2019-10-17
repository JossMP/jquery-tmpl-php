<?php

namespace jossmp\jQueryTmpl\Token;

class ValueEscaped extends \jossmp\jQueryTmpl\Token\TypeInline
{
    public function getElementType()
    {
        return 'ValueEscaped';
    }
}
