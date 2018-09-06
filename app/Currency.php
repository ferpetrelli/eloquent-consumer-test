<?php

namespace App;

use \Petrelli\EloquentConsumer\Models\ApiModel;

class Currency extends ApiModel
{

    protected $endpointClass = \App\ApiConsumer\Endpoints\CurrenciesEndpoint::class;

    protected $endpoints = [
        'collection' => 'currency'
    ];

}
