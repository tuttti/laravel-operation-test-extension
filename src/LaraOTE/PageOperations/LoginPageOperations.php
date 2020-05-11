<?php

namespace Tuttti\LaraOTE\PageOperations;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTE\PageOperations\Contracts\LoginPageOperationsInterface;
use Tuttti\LaraOTE\UiTestModels\Credintials;

class LoginPageOperations implements LoginPageOperationsInterface
{
    public function showLoginPage(Browser $browser):void
    {
        $browser->visit('/login');
    }
    public function login(Browser $browser, Credintials $credintials):void
    {
        $browser->type('login_id', $credintials["email"])
                ->type('password', $credintials["password"])
                ->press('login-button')
                ;
    }
}