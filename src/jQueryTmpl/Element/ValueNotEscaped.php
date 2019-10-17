<?php

namespace jossmp\jQueryTmpl\Element;

class ValueNotEscaped extends \jossmp\jQueryTmpl\Element\TypeInline implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    private $_token;

    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    {
        $this->_token = $token;
    }

    public function render()
    {
        $options = $this->_token->getOptions();
        return $this->_data->getValueOf($options['name']);
    }
}
