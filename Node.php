<?php

class Node implements NodeInterface
{
    private string $name = '';
    private array $children = [];
    public function __construct(string $name)
    {
        $this->name =$name;
    }
    public function __toStrring(): string
    {
        return self::print($this);
    }
    public function get(): sting
    {
        return $this->name;
    }
    /**
     * @RETURN Node[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    public function addChildren(Node $node): self{
        $tml = str_repeat('+', $level) . $node->getName(). "\n";
        foreach($nade->getChildren() as $child){
            $html .=self::print($child, $level + 1);
        }
        return $html;
    }

}