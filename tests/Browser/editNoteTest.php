<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class editNoteTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group editnote
     */
    public function testEditNote(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
            ->type('email', 'k@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->clickLink('Edit')
            ->assertPathIs('/edit-note-page/14')
            ->press("")
            ->type('title', 'Aku Sedang Belajar PPL')
            ->type('description', 'Modul 3 Automation Testing Susah')
            ->press('UPDATE')
            ->pause(2000)
            ->assertPathIs('/notes')
            ->assertSee('Aku Sedang Belajar PPL');



        });
    }


     
}

