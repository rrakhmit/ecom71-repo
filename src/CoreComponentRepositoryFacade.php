<?php

namespace Coder71ecom71\Ecom71Repo;

use Illuminate\Support\Facades\Facade;

class Ecom71RepoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ecom71-repo';
    }
}
