<?php

namespace Tests\Feature\Api\V1\Link;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListLinksTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_user_can_list_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
