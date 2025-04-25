<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
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
                    ->clickLink('Notes')
                    ->click("a[href='/edit-note-page/2']")
                    ->assertPathIs('/edit-note-page/2')
                    ->type('title', 'Studi Kasus 3 PPL')
                    ->type('description', 'Mengerjakan Testign di PPL studi kasus 3')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}
