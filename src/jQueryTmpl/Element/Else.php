<?php

namespace jossmp\jQueryTmpl\Element;

class ElseS extends \jossmp\jQueryTmpl\Element\TypeControl
{
    private $_token;

    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    {
        $this->_token = $token;
    }

    public function displayNextBlock()
    {
        $options = $this->_token->getOptions();

        if ($options == array()) {
            // Final {{else}} tag
            return true;
        }

        return (bool) $this->_data->getValueOf($options['name']);
    }
}
