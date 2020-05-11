<?php

namespace Tuttti\LaraOTESample\PageOperations;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTESample\PageOperations\Contracts\LoginPageOperationsInterface;
use Tuttti\LaraOTESample\UiTestModels\Credintials;

class LoginPageOperations implements LoginPageOperationsInterface
{
    public function showPage(Browser $browser):void
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