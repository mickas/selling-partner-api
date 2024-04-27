<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  int  $amount  Quantity of units available for a specific item.
     * @param  string  $unitOfMeasure  Unit of measure for the available quantity.
     */
    public function __construct(
        public readonly int $amount,
        public readonly string $unitOfMeasure,
    ) {
    }
}