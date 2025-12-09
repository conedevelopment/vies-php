<?php

declare(strict_types=1);

namespace Cone\Vies;

use Cone\Vies\Api\PublicApi;

class Client
{
    /**
     * The public API instance.
     */
    protected PublicApi $api;

    /**
     * Get the public API instance.
     */
    public function api(): PublicApi
    {
        return $this->api ??= new PublicApi;
    }
}
