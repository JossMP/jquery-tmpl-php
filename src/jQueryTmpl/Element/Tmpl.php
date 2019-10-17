<?php

namespace jossmp\jQueryTmpl\Element;

class Tmpl extends \jossmp\jQueryTmpl\Element\TypeInline implements \jossmp\jQueryTmpl\Element\TypeRenderable
{
    private $_token;

    public function parseToken(\jossmp\jQueryTmpl\Token $token)
    {
        $this->_token = $token;
    }

    public function render()
    {
        $options = $this->_token->getOptions();

        $elements = $this->_compiledTemplates[$options['template']];
        $localData = $this->_data->getDataSice($options['data']);

        if (empty($elements) || empty($localData)) {
            return '';
        }

        $rendered = '';

        foreach ($elements as $element) {
            $rendered .= $element
                ->setData($localData)
                ->setCompiledTemplates($this->_compiledTemplates)
                ->render();
        }

        return $rendered;
    }
}
