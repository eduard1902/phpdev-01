<?php

interface NodeInterface
{
    public function __construct(sting $name);
    public function __toSrting(): sring;
    public function getName(): sring;
    /**
     * @RETURN Node[]
     */
    public function getChildren(): array;
    public function addChildren(Node $node): self;
}

