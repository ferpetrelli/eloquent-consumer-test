<?php

namespace App\ApiConsumer\Endpoints;

use \Petrelli\EloquentConsumer\Endpoints\BaseEndpoint;

class CurrenciesEndpoint extends BaseEndpoint
{

    // Mandatory
    protected $baseUri = 'https://api.nexchange.io/en/api/v1/';

    // Class used to transform the response to the package standards
    protected $transformerClass = \App\ApiConsumer\Transformers\Currencies::class;

}
