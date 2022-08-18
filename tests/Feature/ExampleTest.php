<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function testBasicTest()
=======
    public function test_example()
>>>>>>> d9a8d6e (create api login, order detail)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
