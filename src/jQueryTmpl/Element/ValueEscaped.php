<?php

namespace jossmp\jQueryTmpl\Element;

class ValueEscaped extends \jossmp\jQueryTmpl\Element\TypeInline implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    private $_token;

    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    {
        $this->_token = $token;
    }

    public function render()
    {
        $options = $this->_token->getOptions();
        return htmlspecialchars($this->_data->getValueOf($options['name']), ENT_COMPAT, 'UTF-8');
    }
}
