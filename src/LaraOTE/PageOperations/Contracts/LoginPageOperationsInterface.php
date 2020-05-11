<?php

namespace Tuttti\LaraOTE\PageOperations\Contracts;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTE\UiTestModels\Credintials;

interface LoginPageOperationsInterface
{
    public function showLoginPage(Browser $browser):void;
    public function login(Browser $browser, Credintials $credintials):void;
    
}