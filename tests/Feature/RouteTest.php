<?php
/**
 * Created by PhpStorm.
 * User: jake
 * Date: 3/20/18
 * Time: 2:20 PM
 */

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPollsIndex()
    {
        $response = $this->get('/polls');

        $response->assertStatus(200);
    }

    public function testPollsCreate()
    {
        $response = $this->get('/polls/create');

        $response->assertStatus(200);
    }
}