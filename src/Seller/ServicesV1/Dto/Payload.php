<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class Payload extends Dto
{
    protected static array $complexArrayTypes = ['warnings' => [Warning::class]];

    /**
     * @param  Warning[]|null  $warnings  A list of warnings returned in the sucessful execution response of an API request.
     */
    public function __construct(
        public readonly ?array $warnings = null,
    ) {
    }
}