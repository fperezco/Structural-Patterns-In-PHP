<?php

namespace App\Structural_Patterns\Composite_Pattern\Classes;

use App\Structural_Patterns\Composite_Pattern\Interfaces\ElementInterface;

class HtmlDOC extends ElementComposite
{
    /**
     * @var iterable | ElementInterface[]
     */
    private iterable $elements;
    private string $name;

    public function __construct(string $name)
    {
        $this->elements= [];
        $this->name = $name;
    }

    public function add(ElementInterface $e)
    {
       $this->elements[]=$e;
    }

    public function remove(ElementInterface $e)
    {
       foreach($this->elements as $key => $element){
           if($e->getName() == $e->getName()){
               unset($this->elements[$key]);
           }
       }
    }

    public function render(): string
    {
        $output = "<html>";
        foreach($this->elements as $element){
            $output.= $element->render();
        }
        $output.= "</html>";
        return $output;
    }

    public function getName(): string
    {
        return $this->name;
    }
}