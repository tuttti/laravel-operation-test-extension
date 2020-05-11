<?php
namespace Tuttti\LaraOTE\Support\Contracts;

interface ToArrayableUiTestModel extends \ArrayAccess
{
    public function setUpData($data):void;
    public function toArray():array;
}