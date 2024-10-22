<?php

namespace Softbread\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Softbread\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
