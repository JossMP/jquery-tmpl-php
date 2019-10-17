<?php

namespace jossmp\jQueryTmpl\Token;

class NoOp extends \jossmp\jQueryTmpl\Token\TypeInline
{
    public function getElementType()
    {
        return 'NoOp';
    }
}
