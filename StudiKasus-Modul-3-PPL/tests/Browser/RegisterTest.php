<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'John Doe')
                    ->type('email', 'jd12@example.com')
                    ->type('password', 'password12')
                    ->type('password_confirmation', 'password12')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');

        });
    }
}
