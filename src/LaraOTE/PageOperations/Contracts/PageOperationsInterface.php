<?php

namespace Tuttti\LaraOTE\PageOperations\Contracts;

use Laravel\Dusk\Browser;

interface PageOperationsInterface
{
    public function showPage(Browser $browser):void;
}