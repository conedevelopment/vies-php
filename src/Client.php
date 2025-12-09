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
     * Create a new client instance.
     */
    public function __construct()
    {
        $this->config()->setHost('https://ec.europa.eu/taxation_customs/vies/rest-api');
    }

    /**
     * Get the public API instance.
     */
    public function api(): PublicApi
    {
        return $this->api ??= new PublicApi(
            config: $this->config()
        );
    }

    /**
     * Get the configuration instance.
     */
    protected function config(): Configuration
    {
        return Configuration::getDefaultConfiguration();
    }
}
