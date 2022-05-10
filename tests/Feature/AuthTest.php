<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->withHeaders([
            'Accept' => 'application/json',
        ]);
        $this->withoutExceptionHandling();
        User::factory()->create(['email' => 'eng.mr.gohari1@gmail.com']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_a_user()
    {
        $response = $this->post('/api/auth/register', [
            'email' => 'eng.mr.gohari@gmail.com',
            'name' => 'mohammadreza gohari',
            'password' => '12345678',
        ]);
        $response->assertOk();
        $this->assertArrayHasKey('token', $response);
    }

    public function test_login_a_user()
    {
        $response = $this->post('/api/auth/login', [
            'email' => 'eng.mr.gohari1@gmail.com',
            'password' => 'password',
        ]);
        $response->assertOk();
        $this->assertArrayHasKey('token', $response);
    }
}
