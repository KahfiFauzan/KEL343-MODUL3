<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class createNoteTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group createnote
     */
    public function testCreateNote(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
            ->type('email', 'k@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->clickLink('Notes')
            ->clickLink('Create Note')
            ->type('title', 'Aku Belajar PPL')
            ->type('description', 'Modul 3 Automation Testing')
            ->press('CREATE')
            ->assertPathIs('/notes');



        });
    }

     
}

