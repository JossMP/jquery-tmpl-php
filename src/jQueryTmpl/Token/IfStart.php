<?php

namespace jossmp\jQueryTmpl\Token;

class IfStart extends \jossmp\jQueryTmpl\Token\TypeBlock
{
    public function getElementType()
    {
        return 'If';
    }

    public function isBlockStart()
    {
        return true;
    }

    public function getBlockEndToken()
    {
        return 'IfEnd';
    }
}
