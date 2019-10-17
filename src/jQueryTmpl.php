<?php

namespace jossmp\jQueryTmpl;

class jQueryTmpl
{
    private $_tokenizer;
    private $_parser;

    private $_markup = array();

    private $_compiledTemplates = array();
    private $_outputBuffer;

    public function __construct(\jossmp\jQueryTmpl\Tokenizer $tokenizer, \jossmp\jQueryTmpl\Parser $parser)
    {
        $this->_tokenizer = $tokenizer;
        $this->_parser = $parser;

        $this->_outputBuffer = '';
    }

    public function getHtml()
    {
        $ob = $this->_outputBuffer;
        $this->_outputBuffer = '';
        return $ob;
    }

    public function renderHtml()
    {
        echo $this->getHtml();
        return $this;
    }

    public function getTemplate($name)
    {
        return (isset($this->_markup[$name])) ? $this->_markup[$name] : NULL;
    }

    public function template($name, \jossmp\jQueryTmpl\Markup $markup)
    {
        $this->_markup[$name] = $markup;
        $this->_compiledTemplates[$name] = $this->_compileTemplate($markup);
        return $this;
    }

    public function tmpl($nameOrMarkup, \jossmp\jQueryTmpl\Data $data)
    {
        if ($nameOrMarkup instanceof \jossmp\jQueryTmpl\Markup) {
            $elements = $this->_compileTemplate($nameOrMarkup);
        } else {
            $elements = $this->_compiledTemplates[$nameOrMarkup];
        }

        if (!empty($elements)) {
            $this->_renderElements(
                $elements,
                $data
            );
        }

        return $this;
    }

    private function _compileTemplate(\jossmp\jQueryTmpl\Markup $markup)
    {
        return $this->_parser->parse(
            $this->_tokenizer->tokenize(
                $markup->getTemplate()
            )
        );
    }

    private function _renderElements(array $elements, \jossmp\jQueryTmpl\Data $data)
    {
        foreach ($elements as $element) {
            $this->_outputBuffer .= $element
                ->setData($data)
                ->setCompiledTemplates($this->_compiledTemplates)
                ->render();
        }
    }
}
