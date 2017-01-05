<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRegisterPage()
    {
        $this->visit('/register')
             ->see('Register Now');
    }
}
