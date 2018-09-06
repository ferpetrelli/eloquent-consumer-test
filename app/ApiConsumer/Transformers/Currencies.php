<?php

namespace App\ApiConsumer\Transformers;

use Petrelli\EloquentConsumer\Transformers\BaseTransformer;


class Currencies extends BaseTransformer
{

    /**
     * Transform Currencies API response to a format we can read
     */

    public function transform()
    {

        $duplicate = clone $this->response;

        $duplicate->body = (object) [
            'data' => $duplicate->body
        ];

        return $duplicate;

    }


}
