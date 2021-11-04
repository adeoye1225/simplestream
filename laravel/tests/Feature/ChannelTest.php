<?php

namespace Tests\Feature;

use App\Models\Channel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChannelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    /** @test */
    public function channles_can_be_listed()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/channels', [
            
        ]);

        $response->assertOk();
        //$this->assertGreaterThan(1, Channel::all()->count());
    }
}
