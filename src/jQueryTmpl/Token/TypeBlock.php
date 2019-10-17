<?php

namespace jossmp\jQueryTmpl\Token;

abstract class TypeBlock extends \jossmp\jQueryTmpl\Token\Base
{
    /**
     *  Methods below help the jQueryTmpl_Parser determin what to do
     *  when it encounters the token.
     */
    abstract public function isBlockStart();
    abstract public function getBlockEndToken();
}
