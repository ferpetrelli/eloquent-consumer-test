<?php

namespace App\ApiConsumer\Transformers;

use Petrelli\EloquentConsumer\Transformers\BaseTransformer;


class Crypto extends BaseTransformer
{

    /**
     * Transform Grants API response to a format we can read
     */

    public function transform()
    {

        $duplicate = clone $this->response;

        // Create a 'pagination' attribute with the total number of currencies
        $duplicate->body->pagination = (object) [
            'total' => $duplicate->body->metadata->num_cryptocurrencies
        ];

        return $duplicate;

    }


}
