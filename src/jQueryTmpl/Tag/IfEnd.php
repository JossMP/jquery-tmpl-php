<?php

namespace jossmp\jQueryTmpl\Tag;

class IfEnd implements \jossmp\jQueryTmpl\Tag
{
    public function getTokenType()
    {
        return 'IfEnd';
    }

    public function getRegex()
    {
        return '/{{\/if}}/i';
    }

    public function getNestingValue()
    {
        return array(-1, 0);
    }

    public function parseTag($rawTagString)
    {
        return array();
    }
}
