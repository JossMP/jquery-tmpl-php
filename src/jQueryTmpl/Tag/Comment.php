<?php

namespace jossmp\jQueryTmpl\Tag;

class Comment implements \jossmp\jQueryTmpl\Tag
{
    public function getTokenType()
    {
        return 'Comment';
    }

    public function getRegex()
    {
        return '/{{!.*?}}/s';
    }

    public function getNestingValue()
    {
        return array(0, 0);
    }

    public function parseTag($rawTagString)
    {
        return array();
    }
}
