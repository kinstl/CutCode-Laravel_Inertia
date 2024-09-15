<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class InertiaTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_users_index_component(): void
    {
        $this->get('/users')->assertInertia(function (Assert $page) {
            $page->component('Users/Index')->has('users')->has('title')->where('title', 'Users')->has('users.data')->has('users.links');
        });
    }
}
