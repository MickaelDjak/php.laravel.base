<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostsPageTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEventsPageTest()
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPreachingsPageTest()
    {
        $response = $this->get('/preachings');

        $response->assertStatus(200);
    }

//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testBiblePageTest()
//    {
//        $response = $this->get('/bible');
//
//        $response->assertStatus(200);
//    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMinistryPageTest()
    {
        $response = $this->get('/ministry');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCredoPageTest()
    {
        $response = $this->get('/credo');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactPageTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutPageTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGalleryPageTest()
    {
        $response = $this->get('/gallery');

        $response->assertStatus(200);
    }
}
