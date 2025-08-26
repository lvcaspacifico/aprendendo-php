<?php

namespace Set;

class Set {

    private array $items = [];

    public function __construct(string ...$args)
    {
        foreach($args as $arg){
            $this->items[$arg] = true;
        }
    }

    public function all(): array {
        return array_keys($this->items);
    }
} 
?>