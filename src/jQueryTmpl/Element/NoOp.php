<?php

namespace jossmp\jQueryTmpl\Element;

class NoOp extends \jossmp\jQueryTmpl\Element\TypeInline implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    private $_token;

    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    {
        $this->_token = $token;
    }

    public function render()
    {
        return $this->_token->getRawContent();
    }
}
