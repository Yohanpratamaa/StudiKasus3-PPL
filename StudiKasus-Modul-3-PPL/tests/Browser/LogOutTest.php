<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'jd12@example.com')
                    ->type('password', 'password12')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->click('#click-dropdown')
                    ->clickLink('Log Out')
                    ->assertPathIs('/');
        });
    }
}
