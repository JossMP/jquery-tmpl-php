<?php

namespace jossmp\jQueryTmpl\Token;

class EachEnd extends \jossmp\jQueryTmpl\Token\TypeBlock
{
    public function getElementType()
    {
        return '';
    }

    public function isBlockStart()
    {
        return false;
    }

    public function getBlockEndToken()
    {
        return '';
    }
}
