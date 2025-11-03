<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_returns_success_response_for_items_route()
    {
        $response = $this->get('/items');

        $response->assertStatus(200);
        $response->assertJson([
            'message' => '1',
        ]);
    }
}
