<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api');
        var_dump($response);

        $response->assertStatus(200);
        $response->assertJson([
            'name'=>'Hello World'
        ]);
        
        // $response->asserSeeText($response);
    }
}
