<?php

namespace jossmp\jQueryTmpl\Token;

class Comment extends \jossmp\jQueryTmpl\Token\TypeInline
{
    public function getElementType()
    {
        return 'Comment';
    }
}
