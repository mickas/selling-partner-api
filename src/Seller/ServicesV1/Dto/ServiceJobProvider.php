<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ServiceJobProvider extends Dto
{
    /**
     * @param  ?string  $serviceJobProviderId  The identifier of the service job provider.
     */
    public function __construct(
        public readonly ?string $serviceJobProviderId = null,
    ) {
    }
}