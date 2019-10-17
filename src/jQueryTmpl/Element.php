<?php

namespace jossmp\jQueryTmpl;

/**
 *  The parser takes the tokens array and produces an array of
 *  elements, more specificaly renderable elements. Each element is a
 *  object that takes a jQueryTmpl_Data object and acts upon it be it
 *  to render content or issue flow control messages.
 */
interface Element
{
    /**
     *  Each element must take some data and then act upon it.
     *  @param \jossmp\jQueryTmpl\Data $data The data
     *  @return \jossmp\jQueryTmpl\Element Return $this to chain.
     */
    public function setData(\jossmp\jQueryTmpl\Data $data);

    /**
     *  Each element can optionally take an array of rendered
     *  templates. (Currently an array of elements.)
     */
    public function setCompiledTemplates(array $compiledTemplates);
}
