<?php

namespace App;

use \Petrelli\EloquentConsumer\Models\ApiModel;

class Coin extends ApiModel
{

    protected $endpointClass = \App\ApiConsumer\Endpoints\CryptoEndpoint::class;

    protected $endpoints = [
        'collection' => 'listings'
    ];

}
