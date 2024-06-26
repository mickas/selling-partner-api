<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV1\Dto\CreateShipmentResult;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;

final class CreateShipmentResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CreateShipmentResult  $payload  The payload schema for the createShipment operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CreateShipmentResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
