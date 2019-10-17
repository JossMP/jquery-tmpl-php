<?php

namespace jossmp\jQueryTmpl\Element;

abstract class Base implements \jossmp\jQueryTmpl\Element
{
    protected $_data;
    protected $_compiledTemplates = array();

    public function setData(\jossmp\jQueryTmpl\Data $data)
    {
        $this->_data = $data;
        return $this;
    }

    public function setCompiledTemplates(array $compiledTemplates)
    {
        $this->_compiledTemplates = $compiledTemplates;
        return $this;
    }
}
