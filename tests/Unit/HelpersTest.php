<?php

namespace Tests\Unit;

use Tests\TestCase;

class HelpersTest extends TestCase
{
	/** @test */
    public function pageTitleShouldReturnTheBaseTitleIftTitleIsEmpty()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /** @test */
    public function pageTitleShouldReturnTheCorrectTitleIftTitleIsProvided()
    {
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    }

    /** @test */
    public function setActiveRouteShouldReturnTheCorrectClassBasedOnAGivenRoute()
    {
        $this->get(route('home'));
        $this->assertEquals('active', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
    }
}
