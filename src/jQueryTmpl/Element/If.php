<?php

namespace jossmp\jQueryTmpl\Element;

class IfS extends \jossmp\jQueryTmpl\Element\TypeBlock implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    private $_firstToken;
    private $_elements;

    public function parseTokens(array $tokens)
    {
        // Remove first and last token
        $this->_firstToken = array_shift($tokens);
        $lastToken = array_pop($tokens);

        // Make sure we have the right types of tokens
        if (!($this->_firstToken instanceof \jossmp\jQueryTmpl\Token\IfStart && $lastToken instanceof \jossmp\jQueryTmpl\Token\IfEnd)) {
            throw new \jossmp\jQueryTmpl\Element\Exception('Token mismatch, cannot create {{if}} element.');
        }

        $this->_elements = $this->_parser->parse($tokens);
    }

    public function render()
    {
        $options = $this->_firstToken->getOptions();

        $startDisplay = (bool) $this->_data->getValueOf($options['name']);

        $rendered = '';

        foreach ($this->_elements as $element) {
            if ($element instanceof \jossmp\jQueryTmpl\Element\ElseS) {
                if ($startDisplay) {
                    break;
                } else {
                    $startDisplay = $element->setData($this->_data)->displayNextBlock();
                    continue;
                }
            }

            if ($startDisplay) {
                $rendered .= $element
                    ->setData($this->_data)
                    ->setCompiledTemplates($this->_compiledTemplates)
                    ->render();
            }
        }

        return $rendered;
    }
}
