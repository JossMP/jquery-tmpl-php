<?php

namespace jossmp\jQueryTmpl\Element;

abstract class TypeInline extends \jossmp\jQueryTmpl\Element\Base
{
    abstract public function parseToken(\jossmp\jQueryTmpl\Token $token);
}
