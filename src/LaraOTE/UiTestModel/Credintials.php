<?php

namespace Tuttti\LaraOTE\UiTestModels;

class Credintials implements toArrayableUiTestModel
{
    use \Tuttti\LaraOTE\UiTestModels\Concerns\HasMethodForToArrayableModel;

    public function __construct(string $email, string $password)
    {
        $this->setUpData([
            "email"=>$email, 
            "password"=>$password,
        ]);
    }

    protected $email;
    protected $password;
}