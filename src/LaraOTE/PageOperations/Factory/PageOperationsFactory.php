<?php
namespace Tuttti\LaraOTE\PageOperations\Factory;

use Tuttti\LaraOTE\PageOperations\Contracts\PageOperationsInterface;

class PageOperationsFactory
{
    public static function make(string $pageOperationsKey):PageOperationsInterface
    {
        if(! ( $pageOperationsClassName = config("LaraOTE.PageOperationsMap")[$pageOperationsKey] ?? null))
        {
            throw new \Exception("");
        }
        return static::makePageOperationsInstance($pageOperationsClassName);
    }

    public static function makePageOperationsInstance(string $pageOperationsClassName):PageOperationsInterface
    {
        if(! class_exists($pageOperationsClassName)
           || ! ($pageOperationsInstance = app()->make($pageOperationsClassName)) instanceof PageOperationsInterface)
        {
            throw new \Exception("");
        }
        return $pageOperationsInstance;

    }
}