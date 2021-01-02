<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/login')
                    ->assertSee('Login here')
                    ->type('email', 'user@thomasmore.be')
                    ->type('password', 'secret')
                    ->press('button')
                    ->assertPathIs('/company');
        });
    }
}
