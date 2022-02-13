<?php
abstract class NodeAbstract implements NodeInterface
{
    private string $name = "";
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}