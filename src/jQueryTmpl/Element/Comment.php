<?php

namespace jossmp\jQueryTmpl\Element;

class Comment extends \jossmp\jQueryTmpl\Element\TypeInline implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    { }

    public function render()
    {
        return '';
    }
}
