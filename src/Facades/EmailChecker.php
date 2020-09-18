<?php

namespace ZanySoft\EmailChecker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method bool check(string $email)
 *
 * @see \ZanySoft\EmailChecker\EmailChecker
 */
class EmailChecker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'email-checker';
    }
}
