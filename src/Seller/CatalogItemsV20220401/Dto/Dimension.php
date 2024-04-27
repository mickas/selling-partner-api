<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class Dimension extends Dto
{
    /**
     * @param  ?string  $unit  Measurement unit of the dimension value.
     * @param  ?float  $value  Numeric dimension value.
     */
    public function __construct(
        public readonly ?string $unit = null,
        public readonly ?float $value = null,
    ) {
    }
}