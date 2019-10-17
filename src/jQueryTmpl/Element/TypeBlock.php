<?php

namespace jossmp\jQueryTmpl\Element;

abstract class TypeBlock extends \jossmp\jQueryTmpl\Element\Base
{
    protected $_parser;

    public function __construct(\jossmp\jQueryTmpl\Parser $parser)
    {
        $this->_parser = $parser;
    }

    abstract public function parseTokens(array $tokens);
}
