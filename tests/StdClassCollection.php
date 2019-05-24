<?php

namespace Arrayy\tests;

use Arrayy\Collection\AbstractCollection;

class StdClassCollection extends AbstractCollection
{
    /**
     * The type (FQCN) associated with this collection.
     *
     * @return string
     */
    public function getType(): string
    {
        return \stdClass::class;
    }
}