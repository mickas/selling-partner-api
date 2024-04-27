<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class TrackingSummary extends Dto
{
    /**
     * @param  ?string  $status  The derived status based on the events in the eventHistory.
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}