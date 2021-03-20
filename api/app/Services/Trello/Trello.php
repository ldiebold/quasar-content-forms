<?php

namespace App\Services\Trello;

use App\Services\Trello\Traits\BoardTrait;
use App\Services\Trello\Traits\ListTrait;
use Illuminate\Support\Facades\Http;

class Trello
{
    use BoardTrait;
    use ListTrait;

    private $credentials;

    public function __construct(string $apiKey, string $apiToken)
    {
        $this->credentials = [
            'key' => $apiKey,
            'token' => $apiToken,
        ];
    }

    /**
     * @return mixed|string
     * @throws TwitterRequestException
     */
    public function query(
        string $endpoint,
        string $requestMethod,
        array $parameters = []
    ) {
        return Http::{$requestMethod}(
            'https://api.trello.com/1' . $endpoint,
            array_merge($parameters, $this->credentials)
        );
    }

    public function get($resource, $parameters)
    {
        return $this->query($resource, 'get', array_merge($parameters, $this->credentials));
    }

    public function post($resource, $parameters)
    {
        return $this->query($resource, 'post', array_merge($parameters, $this->credentials));
    }

    public function patch($resource, $parameters)
    {
        return $this->query($resource, 'patch', array_merge($parameters, $this->credentials));
    }

    public function delete($resource, $parameters)
    {
        return $this->query($resource, 'delete', array_merge($parameters, $this->credentials));
    }
}
