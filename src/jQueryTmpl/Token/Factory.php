<?php

namespace jossmp\jQueryTmpl\Token;

class Factory
{
    public function create($type, $level, array $options, $rawContent)
    {
        $class = "\jossmp\jQueryTmpl\Token\\" . $type;
        return new $class($level, $options, $rawContent);
    }
}
