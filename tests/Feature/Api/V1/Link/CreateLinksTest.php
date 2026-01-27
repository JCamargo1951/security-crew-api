<?php

namespace Tests\Feature\Api\V1\Link;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateLinksTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_user_can_create_link(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
