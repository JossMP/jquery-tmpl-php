<?php

namespace jossmp\jQueryTmpl\Tag;

class IfStart implements \jossmp\jQueryTmpl\Tag
{
    public function getTokenType()
    {
        return 'IfStart';
    }

    public function getRegex()
    {
        return '/{{if.*?}}/is';
    }

    public function getNestingValue()
    {
        return array(0, 1);
    }

    public function parseTag($rawTagString)
    {
        $matches = array();
        preg_match('/^{{if(.*)}}$/is', $rawTagString, $matches);

        return array(
            'name' => trim($matches[1])
        );
    }
}
