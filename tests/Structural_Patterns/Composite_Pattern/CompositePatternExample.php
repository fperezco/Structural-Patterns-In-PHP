<?php

namespace App\Tests\Structural_Patterns\Composite_Pattern;

use App\Structural_Patterns\Composite_Pattern\Classes\HtmlDiv;
use App\Structural_Patterns\Composite_Pattern\Classes\HtmlImage;
use App\Structural_Patterns\Composite_Pattern\Classes\HtmlInput;
use PHPUnit\Framework\TestCase;

class CompositePatternExample extends TestCase
{
    public function test_leaf_node_just_return_its_representation_on_render()
    {
        //GIVEN
        $img = new HtmlImage("/img/test.png");
        $expectedRender = "<img src='/img/test.png'/>";

        //WHEN
        $render = $img->render();

        //THEN
        $this->assertEquals($expectedRender, $render);
    }

    public function test_node_call_children_render()
    {
        //GIVEN
        $image = $this->createMock(HtmlImage::class);
        $input = $this->createMock(HtmlInput::class);
        $div = new HtmlDiv('divX');
        $div->add($image);
        $div->add($input);

        //THEN
        $image->expects($this->once())->method('render');
        $input->expects($this->once())->method('render');

        //WHEN
        $div->render();
    }

    public function test_node_return_its_representation_plus_its_children_nodes_representation()
    {
        //GIVEN
        $image = new HtmlImage("/img/test.png");
        $input = new HtmlInput("inputX");
        $div = new HtmlDiv('divX');
        $div->add($image);
        $div->add($input);
        $expectedRender ="<div><img src='/img/test.png'/><input name='inputX'></input></div>";

        //WHEN
        $render = $div->render();

        //THEN
        $this->assertEquals($expectedRender, $render);
    }
}