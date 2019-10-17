<?php

namespace jossmp\jQueryTmpl\Token;

class EachStart extends \jossmp\jQueryTmpl\Token\TypeBlock
{
    public function getElementType()
    {
        return 'Each';
    }

    public function isBlockStart()
    {
        return true;
    }

    public function getBlockEndToken()
    {
        return 'EachEnd';
    }
}
