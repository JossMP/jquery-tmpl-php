<?php

namespace jossmp\jQueryTmpl\Tokenizer;

class Factory
{
    public function create()
    {
        $tokenizer = new \jossmp\jQueryTmpl\Tokenizer(
            new \jossmp\jQueryTmpl\Token\Factory()
        );

        $tokenizer
            // Comment
            ->addTag(new \jossmp\jQueryTmpl\Tag\Comment())
            // Each block
            ->addTag(new \jossmp\jQueryTmpl\Tag\EachStart())
            ->addTag(new \jossmp\jQueryTmpl\Tag\EachEnd())
            // If/Else Block
            ->addTag(new \jossmp\jQueryTmpl\Tag\IfStart())
            ->addTag(new \jossmp\jQueryTmpl\Tag\ElseS())
            ->addTag(new \jossmp\jQueryTmpl\Tag\IfEnd())
            // Tmpl Tag
            ->addTag(new \jossmp\jQueryTmpl\Tag\Tmpl())
            // Values
            ->addTag(new \jossmp\jQueryTmpl\Tag\ValueEscaped())
            ->addTag(new \jossmp\jQueryTmpl\Tag\ValueEscapedShorthand())
            ->addTag(new \jossmp\jQueryTmpl\Tag\ValueNotEscaped());

        return $tokenizer;
    }
}
