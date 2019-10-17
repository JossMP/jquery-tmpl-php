<?php

namespace jossmp\jQueryTmpl\Markup;

class StringS implements \jossmp\jQueryTmpl\Markup
{
    private $_template;

    public function __construct($template)
    {
        $this->_template = (string) $template;
    }

    public function getTemplate()
    {
        return $this->_template;
    }
}
