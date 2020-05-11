<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Browser-Test Path
    |--------------------------------------------------------------------------
    |
    | Set your folder path toward the directory for dusk-base browser tests
    |
    */
    "browser_test_path"=>(base_path() . DIRECTORY_SEPARATOR . "tests". DIRECTORY_SEPARATOR . "Browser"),
    
    /*
    |--------------------------------------------------------------------------
    | Page-Operations mappings
    |--------------------------------------------------------------------------
    |
    | Your mappings to Page-Operations class, 
    | which must implements \Tuttti\LaraOTE\PageOperations\Contrats\PageOperationsInterface
    |
    */
    "page_operations_mappings"=>[
        "login"=>\Tuttti\LaraOTESample\PageOperations\LoginPageOperations::class,
    ],
];