<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Polls;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PollsTest extends TestCase
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

    public function testStoreNewPoll()
    {
        $poll = factory(Polls::class)->create();

        $poll->save();

        $this->assertDatabaseHas('polls', $poll->toArray());
    }
}
