<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogOutTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group logout
     */
    public function testLogOut(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
            ->type('email', 'k@gmail.com')
            ->type('password', '12345678')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->press('Kahfi')
            ->clickLink('Log Out');

       



        });
    }

     
}

