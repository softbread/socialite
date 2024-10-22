<?php

namespace Softbread\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use Softbread\Socialite\Contracts\Factory;

/**
 * @method static \Softbread\Socialite\Contracts\Provider driver(string $driver = null)
 * @method static \Softbread\Socialite\Two\AbstractProvider buildProvider($provider, $config)
 * @method array getScopes()
 * @method \Softbread\Socialite\Contracts\Provider scopes(array|string $scopes)
 * @method \Softbread\Socialite\Contracts\Provider setScopes(array|string $scopes)
 * @method \Softbread\Socialite\Contracts\Provider redirectUrl(string $url)
 *
 * @see \Softbread\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
