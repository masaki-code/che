<?php

class SampleTest extends PHPUnit\Framework\TestCase
{

    /**
     *
     * @test
     */
    public function testOf()
    {
        $actual = Sample::of('val');
        $this->assertEquals('val', $actual->toString());
    }
}