<?php

namespace Tests\Unit;

use App\UserVotes;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserVotesTest extends TestCase
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

    public function testStoreNewUserVotes()
    {
        $userVotes = factory(UserVotes::class)->create();

        $userVotes->save();

        $this->assertDatabaseHas('user_votes', $userVotes->toArray());
    }
}
