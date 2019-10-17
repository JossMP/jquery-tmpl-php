<?php

namespace jossmp\jQueryTmpl\Data;

class Factory
{
    public function createFromJson($json)
    {
        try {
            $obj = json_decode($json);
        } catch (Exception $e) {
            throw new \jossmp\jQueryTmpl\Data\Exception($e->getMessage());
        }

        if (!($obj instanceof \stdClass)) {
            throw new \jossmp\jQueryTmpl\Data\Exception('Could not create data object from JSON string');
        }

        return new \jossmp\jQueryTmpl\Data(
            $obj,
            new \jossmp\jQueryTmpl\Data\Factory()
        );
    }

    public function createFromArray(array $array)
    {
        return new \jossmp\jQueryTmpl\Data(
            json_decode(
                json_encode($array)
            ),
            new \jossmp\jQueryTmpl\Data\Factory()
        );
    }

    public function createFromStdClass(\stdClass $obj)
    {
        return new \jossmp\jQueryTmpl\Data(
            $obj,
            new \jossmp\jQueryTmpl\Data\Factory()
        );
    }
}
