<?php

namespace Maketok\Migration\Data\Source;

class ArraySource
{
    /**
     * Data array
     * @var array
     */
    private $storage = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->storage = $data;
    }

    /**
     * Fetch one row
     * @return array|bool
     */
    public function fetch()
    {
    }
}
