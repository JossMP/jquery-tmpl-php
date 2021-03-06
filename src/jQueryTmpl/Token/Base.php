<?php

namespace jossmp\jQueryTmpl\Token;

abstract class Base implements \jossmp\jQueryTmpl\Token
{
    private $_level;
    private $_options;
    private $_rawContent;

    public function __construct($level, array $options, $rawContent)
    {
        $this->_level = $level;
        $this->_options = $options;
        $this->_rawContent = $rawContent;
    }

    public function getLevel()
    {
        return $this->_level;
    }

    public function getOptions()
    {
        return $this->_options;
    }

    public function getRawContent()
    {
        return $this->_rawContent;
    }
}
