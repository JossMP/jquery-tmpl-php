<?php

namespace jossmp\jQueryTmpl\Element;

class Factory
{
    public function createBlock($type, array $tokens)
    {
        $parserFactory = new \jossmp\jQueryTmpl\Parser\Factory();

        $class = "\jossmp\jQueryTmpl\Element\\" . $type;
        $element = new $class($parserFactory->create());
        $element
            ->parseTokens($tokens);

        return $element;
    }

    public function createControl($type, \jossmp\jQueryTmpl\Token $token)
    {
        $class = "\jossmp\jQueryTmpl\Element\\" . $type;
        $element = new $class();
        $element
            ->parseToken($token);

        return $element;
    }

    public function createInline($type, \jossmp\jQueryTmpl\Token $token)
    {
        $class = "\jossmp\jQueryTmpl\Element\\" . $type;
        $element = new $class();
        $element
            ->parseToken($token);

        return $element;
    }
}
