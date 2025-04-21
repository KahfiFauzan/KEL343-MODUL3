<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group Login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
           

                    ->press('')
                    ->type('email', 'k@gmail.com')
               
                    ->type('password', '12345678')
                    ->press('')
                    ->press('')
                    ->press('LOG IN');
        });
    }
}
