<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/version');

        $this->assertEquals(
            $this->app->version() . '. Created by <a href="https://iamnapo.me">iamnapo</a>.', $this->response->getContent()
        );
    }
}
