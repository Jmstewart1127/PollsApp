<?php

namespace Tests\Unit;

use App\Choices;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChoicesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testChoiceCreate()
    {
        $response = $this->get('/choices/create');

        $response->assertStatus(200);
    }

    public function testCreateChoices()
    {
        $choice = factory(Choices::class)->create();

        $choice->save();

        $this->assertDatabaseHas('choices', $choice->toArray());
    }
}
