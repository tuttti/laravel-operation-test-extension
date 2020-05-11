<?php

namespace Tuttti\LaraOTESample\PageOperations\Contracts;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTE\PageOperations\Contracts\PageOperationsInterface;
use Tuttti\LaraOTE\UiTestModels\Credintials;

interface LoginPageOperationsInterface extends PageOperationsInterface
{
    public function login(Browser $browser, Credintials $credintials):void;
}