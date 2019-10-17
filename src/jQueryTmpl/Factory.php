<?php

namespace jossmp\jQueryTmpl;

class Factory
{
    public function create()
    {
        $tFactory = new \jossmp\jQueryTmpl\Tokenizer\Factory();
        $pFactory = new \jossmp\jQueryTmpl\Parser\Factory();

        return new jQueryTmpl(
            $tFactory->create(),
            $pFactory->create()
        );
    }
}
