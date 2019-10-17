<?php

namespace jossmp\jQueryTmpl\Markup;

class File implements \jossmp\jQueryTmpl\Markup
{
    private $_template;

    public function __construct($filename)
    {
        $this->_getFileContents($filename);
    }

    public function getTemplate()
    {
        return $this->_template;
    }

    private function _getFileContents($filename)
    {
        try {
            $this->_template = file_get_contents($filename);
        } catch (Exception $e) {
            throw new \jossmp\jQueryTmpl\Markup\Exception($e->getMessage());
        }

        if ($this->_template == FALSE) {
            throw new \jossmp\jQueryTmpl\Markup\Exception("Could not open markup file '$filename'.");
        }
    }
}
