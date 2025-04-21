<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group regist
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/')
                    ->clickLink('Register')
 
              
                    ->type('name','Kahfi')
                 
                    ->type('email', 'k@gmail.com')
               
                    ->type('password', '12345678')
                    
                    ->type ('password_confirmation', '12345678')
                    
                    ->press('REGISTER')

  
                    ->assertPathIs('/dashboard');
        });
    }
}

