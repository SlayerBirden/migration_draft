<?php

namespace Maketok\Migration\Assembly;

class Filter
{
    /**
     * @var array
     */
    private $rules = [];

    public function addRule(callable $rule)
    {
        $this->rules[] = $rule;
    }
}
