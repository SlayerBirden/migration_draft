<?php

namespace Maketok\Migration\Data;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Input
{
    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;

    /**
     * @param EventDispatcherInterface $dispatcher
     */
    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function readRow()
    {
        $this->dispatcher->dispatch('before.read');
    }
}
