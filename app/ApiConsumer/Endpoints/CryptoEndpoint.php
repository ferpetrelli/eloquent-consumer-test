<?php

namespace App\ApiConsumer\Endpoints;

use \Petrelli\EloquentConsumer\Endpoints\BaseEndpoint;

class CryptoEndpoint extends BaseEndpoint
{

	// Mandatory
	protected $baseUri = 'https://api.coinmarketcap.com/v2/';

    protected $transformerClass = \App\ApiConsumer\Transformers\Crypto::class;

}
