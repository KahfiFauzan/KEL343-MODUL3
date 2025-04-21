<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class viewNoteTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group viewnote
     */
    public function testViewNote(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
            ->type('email', 'k@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->clickLink('Notes')
            ->assertPathIs('/notes');



        });
    }

     
}

