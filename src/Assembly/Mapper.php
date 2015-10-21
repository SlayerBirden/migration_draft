<?php

namespace Maketok\Migration\Assembly;

class Mapper
{
    /**
     * @var array
     */
    private $map;

    /**
     * @param array $map
     */
    public function __construct(array $map)
    {
        $this->map = $map;
    }
}
