<?php

namespace Tests\Unit;

use Tests\TestCase;

class HelpersTest extends TestCase
{
	/**
     * A basic test example.
     *
     * @test
     */

    public function pageTitleShouldReturnTheBaseTitleIftTitleIsEmpty()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    public function pageTitleShouldReturnTheCorrectTitleIftTitleIsProvided()
    {
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    }
}
